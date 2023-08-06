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

        // Получаем элемент, который находится выше текущего элемента
        $previousElement = $model::where('order', '<', $element->order)
            ->orderBy('order', 'desc')
            ->first();

        if ($previousElement) {
            // Меняем порядок элементов
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

        // Получаем элемент, который находится ниже текущего элемента
        $nextElement = $model::where('order', '>', $element->order)
            ->orderBy('order')
            ->first();

        if ($nextElement) {
            // Меняем порядок элементов
            $nextElementOrder = $nextElement->order;
            $nextElement->update(['order' => $element->order]);
            $element->update(['order' => $nextElementOrder]);

            return redirect()->back()->with('success', 'Элемент перемещен вниз.');
        }

        return redirect()->back()->with('error', 'Невозможно переместить элемент вниз.');
        // $banner = $model::findOrFail($id);
        // $countOfBanners = $model::count();
        // if($banner->order == strval($countOfBanners)) {
        //     $nextBanner = $model::where('order', '1')->first();
        //     $banner->update(['order' => 1]);
        //     $nextBanner->update(['order' => $countOfBanners]);
        // } else {
        //     $nextBanner = $model::where('order', $banner->order+1)->first();
        //     $banner->update(['order' => $banner->order + 1]);
        //     $nextBanner->update(['order' => $nextBanner->order - 1]);
        // }
    }
}
