<?php

namespace App\Services;



use Kalnoy\Nestedset\NodeTrait;

class OrderService
{
    public function top($id, $model) {
        $element = $model::find($id);

        if (!$element) {
            return redirect()->back()->with('error', 'Элемент не найден.');
        }

        $previousElement = $model::where('order', '<', $element->order)
            ->orderBy('order', 'desc')
            ->first();

        if ($previousElement) {
            $previousElementOrder = $previousElement->order;
            $previousElement->update(['order' => $element->order]);
            $element->update(['order' => $previousElementOrder]);
            return redirect()->back()->with('success', 'Элемент перемещен вверх.');
        }
        return redirect()->back()->with('error', 'Невозможно переместить элемент вверх.');
    }


    public function bottom($id, $model) {
        $element = $model::find($id);
        if (!$element) {
            return redirect()->back()->with('error', 'Элемент не найден.');
        }
        $nextElement = $model::where('order', '>', $element->order)
            ->orderBy('order')
            ->first();

        if ($nextElement) {
            $nextElementOrder = $nextElement->order;
            $nextElement->update(['order' => $element->order]);
            $element->update(['order' => $nextElementOrder]);

            return redirect()->back()->with('success', 'Элемент перемещен вниз.');
        }
        return redirect()->back()->with('error', 'Невозможно переместить элемент вниз.');
    }
}
