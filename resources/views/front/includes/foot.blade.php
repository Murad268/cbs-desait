<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('assets/front/scripts/script.js')}}"></script>

<script>
    const getData = async (url) => {
        const res = await fetch(url);
        return await res.json()
    }
    function filter(wrapperSelector, triggersSelector) {
        const wrapper = document.querySelector(wrapperSelector),
            triggers = document.querySelectorAll(triggersSelector);

            triggers.forEach(trigger => {
                trigger.addEventListener('click', (e) => {
                    wrapper.innerHTML=''
                    document.querySelector('.portfolio .btn__withoutBg').style.display="none"
                    let spinner =
                        `
                        <div style="margin: 0 auto; width: 80px; height: 80px" class="spinner spinner-border" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        `
                    wrapper.insertAdjacentHTML('beforeend', spinner)

                    let id = e.target.getAttribute('data-id');
                    getData('http://127.0.0.1:8000/get_portfolio/'+id).then(res => {
                        wrapper.innerHTML=''
                        document.querySelector('.portfolio .btn__withoutBg').style.display="flex"
                        JSON.parse(res).forEach(item => {


                        let element =
                        `
                        <div class="portfolio__item">
                            <div class="portfolio__item__img">
                                <img src="{{asset('assets/front/images/${item.portfolio_item_img}')}}" alt="">
                            </div>
                            <div class="portfolio__item__category">${item?.filter.filter_name}</div>
                            <div class="portfolio__item__name">${item.portfolio_item_title}</div>
                        </div>
                        `
                        wrapper.insertAdjacentHTML('beforeend', element)
                        })

                    })
                })
            })
    }
    filter('.portfolio__wrapper', '.portfolio__filter a')


    document.addEventListener('DOMContentLoaded', function () {
        var successMessage = '{{ Session::get("success") }}';
        if (successMessage) {
            Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: successMessage,
            showConfirmButton: false,
            timer: 1500
            })
        }
    });
</script>
