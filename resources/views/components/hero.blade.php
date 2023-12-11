<section
    class="relative flex min-h-[70dvh] flex-col justify-between bg-slate-900"
>
    <div
        class="bg-blur-fade sticky top-0 flex flex-col-reverse justify-between gap-4 p-8 px-16 pb-32 lg:flex-row lg:gap-8 lg:pb-36 lg:pl-32"
    >
        <div class="pl-16 pt-8 lg:p-0">
            <img
                width="189"
                height="189"
                src="{{ Vite::asset("resources/img/poster-moon.png") }}"
            />
        </div>
        <div class="flex flex-col gap-8 text-white lg:items-end">
            <x-logo class="w-full max-w-sm lg:max-w-lg" />
            <p
                class="font-display bg-move inline bg-gradient-to-r from-wave-purple via-wave-pink to-wave-orange bg-clip-text text-4xl font-extrabold leading-normal tracking-tight text-transparent lg:text-5xl"
            >
                {{ config("variables.title") }}
            </p>
        </div>
    </div>

    <div class="-mt-32 hidden lg:block">
        <x-illustration.city />
    </div>
</section>

<div class="sticky top-[-5.4vw] z-40 -mt-32">
    <svg viewBox="0 0 1584 116" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M33.088 87.9715L0 87.3543L0 8.48822L33.088 14.5198C66.352 20.4455 132.528 32.5087 198.528 29.6516C264.528 26.7946 330.352 9.22894 396.352 3.19737C462.352 -2.83421 528.528 2.87991 594.528 6.58351C660.528 10.2871 726.352 11.9802 792.352 18.8583C858.352 25.7364 924.528 37.7995 990.528 42.0322C1056.53 46.2649 1122.35 42.6671 1188.35 40.5508C1254.35 38.4344 1320.53 37.7995 1386.53 31.5563C1452.53 25.4189 1518.35 13.7791 1551.09 7.95913L1584 2.1392V93.5269L1551.09 86.9839C1518.35 80.3175 1452.53 67.2317 1386.53 72.9104C1320.53 78.7127 1254.35 103.403 1188.35 112.045C1122.35 120.686 1056.53 113.279 990.528 107.724C924.528 102.168 858.352 98.4649 792.352 91.0578C726.352 83.6507 660.528 72.5401 594.528 75.9967C528.528 79.5768 462.352 97.6008 396.352 102.539C330.352 107.477 264.528 99.3291 198.528 94.5145C132.528 89.8233 66.352 88.5888 33.088 87.9715Z"
            fill="#53345D"
        />
    </svg>
    <img
        class="absolute bottom-0 z-40"
        width="400"
        height="363"
        src="{{ Vite::asset("resources/img/poster-crab.png") }}"
    />
</div>

<svg
    class="sticky top-[-3vw] z-20 -mt-6 lg:-mt-16"
    viewBox="0 0 1584 154"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
>
    <rect width="1584" height="154" fill="#FA7268" />
    <path
        d="M0 109.5L33.088 106.5C88 103.5 131.5 105.5 196.5 113C262.5 118.556 330.352 121.078 396.352 127.298C462.352 133.517 528.528 136.337 594.528 136.171C660.528 136.005 726.352 133.02 792.352 130.946C858.352 128.873 924.528 127.712 990.528 128.707C1056.53 129.702 1122.35 132.688 1188.35 131.859C1254.35 131.029 1320.53 126.385 1386.53 129.371C1452.53 132.439 1518.35 143.22 1551.09 148.61L1584 154V0L1551.09 0C1518.35 0 1452.53 0 1386.53 0C1320.53 0 1254.35 0 1188.35 0C1122.35 0 1056.53 0 990.528 0C924.528 0 858.352 0 792.352 0C726.352 0 660.528 0 594.528 0C528.528 0 462.352 0 396.352 0C330.352 0 264.528 0 198.528 0C132.528 0 66.352 0 33.088 0L0 0L0 109.5Z"
        fill="#AC4B74"
    />
</svg>

<div class="relative sticky top-0 z-10 -mb-16 -mt-1 lg:-mt-16">
    <svg viewBox="0 0 1584 181" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M0 141.509L33.088 143.155C66.352 144.8 132.528 148.091 198.528 151.135C264.528 154.097 330.352 156.894 396.352 160.596C462.352 164.299 528.528 168.906 594.528 169.482C660.528 170.058 726.352 166.438 792.352 158.21C858.352 149.983 924.528 137.149 990.528 132.459C1056.53 127.77 1122.35 131.39 1188.35 139.452C1254.35 147.515 1320.53 164.349 1386.53 172C1452.53 179.651 1449.26 179.684 1482 181L1584 181V0L1551.09 0C1518.35 0 1452.53 0 1386.53 0C1320.53 0 1254.35 0 1188.35 0C1122.35 0 1056.53 0 990.528 0C924.528 0 858.352 0 792.352 0C726.352 0 660.528 0 594.528 0C528.528 0 462.352 0 396.352 0C330.352 0 264.528 0 198.528 0C132.528 0 66.352 0 33.088 0L0 0L0 141.509Z"
            fill="#FA7268"
        />
    </svg>

    <a
        target="_blank"
        class="absolute bottom-0 right-0 z-50 mb-4 mr-8 hidden rounded bg-wave-purple px-4 py-2 font-black text-white xl:block"
        href="{{ config("variables.ticket_url") }}"
    >
        Buy Tickets
    </a>
</div>
