<template>
    <div class="flex flex-col md:flex-row md:justify-between gap-8">
        <a class="border cursor-pointer rounded w-1/2 w-full p-6 relative hover:bg-cover hover:bg-opacity-40 hover:border-transparent transition-all ease-in-out duration-300"
           href="#">
            <div class="border rounded-full w-12 h-12 flex items-center justify-center mb-4">
                <img src="/img/right.svg" width="24">
            </div>
            <p class="uppercase text-xs">Millenium.kz</p>
            <div class="uppercase font-bold md:text-lg menu-item">
                <div>
                    <span v-for="(word,index) in createSpans(first)" class="menu-item-text" :style="{'--index': index, margin: word===' ' ? '3px' : ''}">{{word}}</span>
                </div>
                <div class="absolute top-0">
                    <span v-for="(word,index) in createSpans(first)" class="menu-item-text" :style="{'--index': index, margin: word===' ' ? '3px' : ''}">{{word}}</span>
                </div>
            </div>
        </a>
        <a class="border cursor-pointer rounded w-1/2 w-full p-6 relative hover:bg-cover hover:bg-opacity-40 hover:border-transparent transition-all ease-in-out duration-300"
           href="#">
            <div class="border rounded-full w-12 h-12 flex items-center justify-center mb-4">
                <img src="/img/right.svg" width="24">
            </div>
            <p class="uppercase text-xs">Farmkazyna.kz</p>
            <div class="uppercase font-bold md:text-lg menu-item">
                <div>
                    <span v-for="(word,index) in createSpans(second)" class="menu-item-text" :style="{'--index': index, margin: word===' ' ? '3px' : ''}">{{word}}</span>
                </div>
                <div class="absolute top-0">
                    <span v-for="(word,index) in createSpans(second)" class="menu-item-text" :style="{'--index': index, margin: word===' ' ? '3px' : ''}">{{word}}</span>
                </div>
            </div>
        </a>
    </div>
</template>
<style scoped>
    .menu-item{
        position: relative;
        cursor: pointer;
    }

    .menu-item-text{
        position: relative;
    }

    .menu-item > div:nth-child(1) span{
        will-change: transform;
        transform-style: preserve-3d;
        transition: 0.3s;
        transition-delay: calc(0.03s * var(--index));
        transform-origin: bottom;
        display: inline-block;
    }

    .menu-item > div:nth-child(2) span{
        will-change: transform;
        transform-style: preserve-3d;
        transition: 0.3s;
        transition-delay: calc(0.03s * var(--index));
        transform-origin: top;
        display: inline-block;
        transform: translate3d(0, 100%, 0) rotateX(-90deg);
    }

    .menu-item:hover > div:nth-child(1) span{
        transform: translate3d(0, -100%, 0) rotateX(-90deg);
    }

    .menu-item:hover > div:nth-child(2) span{
        transform: translate3d(0, 0%, 0) rotateX(0deg);
    }
</style>
<script>
export default {
    name: "Partners",
    data:() => ({
        first: 'Приобрести наши товары',
        second: 'Наш прямой партнер'
    }),
    methods: {
        createSpans(word){
            return word.split('');
        }
    }
}
</script>
