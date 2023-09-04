<template>
    <Navbar class="bg-black mb-10" />
    <div class="text-center">
        this is phase details page with id: {{ $route.params.id }}
    </div>
    <LightFooter/>

</template>

<script setup>
import LightFooter from '../components/LightFooter.vue';
import Navbar from '../components/Navbar.vue';

</script>
