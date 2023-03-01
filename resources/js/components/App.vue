<template>
    <main>
        <Sidebar></Sidebar>
        <content class="m-2 text-light rounded pb-0 p-md-4 pb-md-0 mt-5 my-md-2 d-flex flex-column justify-content-between">
            <router-view></router-view>
            <hr>
        </content>
    </main>
</template>

<script>

import Sidebar from './Sidebar.vue';

export default {

    components: { Sidebar },
}
</script>
