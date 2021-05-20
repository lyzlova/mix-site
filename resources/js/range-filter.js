import noUiSlider from "nouislider";

const rangeSlider = document.querySelector('[data-range-slider]');
const minRange = document.querySelector('[data-price-range-min]');
const maxRange = document.querySelector('[data-price-range-max]');
const rangeReset = document.querySelector('[data-price-range-reset]');

if (rangeSlider) {
    noUiSlider.create(rangeSlider, {
        start: [1847, 19717],
        connect: true,
        step: 100,
        range: {
            'min': [1847],
            'max': [19717]
        }
    });

    const inputs = [minRange, maxRange];

    rangeSlider.noUiSlider.on('update', function (values, handle) {
        inputs[handle].value = Math.round(values[handle]);
    });

    const setRangeSlider = (i, value) => {
        const arr = [null, null];
        arr[i] = value;
        rangeSlider.noUiSlider.set(arr);
    }

    inputs.forEach((el, index) => {
        el.addEventListener('change', (e) => {
            setRangeSlider(index, e.currentTarget.value);
        })
    })
}

if(rangeReset) {
    rangeReset.addEventListener('click', (e) => {
        rangeSlider.noUiSlider.reset();
    })
}



