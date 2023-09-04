<template>
    <div>
    <img :src="currentImg" class="h-96 w-96 mx-auto" />
        <div class="bg-black w-full h-52 mt-5 flex">

                <div v-for="i in [currentIndex]" :key="i" class="flex">
                    <img :src="previousImg"  /> <img :src="currentImg" class="border-2 border-blue-800" /> <img :src="nextImg"  />
                </div>
                    <a class="prev" @click="prev" href="#">&#10094; Previous</a>
                    <a class="next" @click="next" href="#">&#10095; Next</a>
        </div>
    </div>


  </template>
  <script>
  export default {
    name: "Slider",
    data() {
      return {
        images: [
          "https://cdn.pixabay.com/photo/2015/12/12/15/24/amsterdam-1089646_1280.jpg",
          "https://cdn.pixabay.com/photo/2016/02/17/23/03/usa-1206240_1280.jpg",
          "https://cdn.pixabay.com/photo/2016/12/04/19/30/berlin-cathedral-1882397_1280.jpg"
        ],

        currentIndex: 0
      };
    },
  
    methods: {

  
      next: function() {
        this.currentIndex += 1;
      },
      prev: function() {
        this.currentIndex -= 1;
      }
    },
  
    computed: {
      currentImg: function() {
        return this.images[Math.abs(this.currentIndex) % this.images.length];
      },
      nextImg: function(){
        return this.images[Math.abs(this.currentIndex+1) % this.images.length];
      },
      previousImg: function(){
        return this.images[Math.abs(this.currentIndex-1) % this.images.length];
      }
    }
  };
  </script>

<style scoped>

slide-leave-active,
.slide-enter-active {
  transition: 1s;
}
.slide-enter {
  transform: translate(100%, 0);
}
.slide-leave-to {
  transform: translate(-100%, 0);
}

.img-slider{
  overflow: hidden;
  position: relative;

}

/* .img-slider img {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right:0;
} */

.prev, .next {
  cursor: pointer;
  width: auto;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  /* transition: 0.7s ease; */
  border-radius: 0 4px 4px 0;
  text-decoration: none;
  user-select: none;
  background-color: rgba(0,0,0,0.9);
}


</style>