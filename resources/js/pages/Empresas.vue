<template>
    <div class="row flex-md-row flex-column-reverse">
        <Loader v-show="!loaded"></Loader>
        <div class="col-md-9">
            <div class="row">
                Projetos
            </div>
        </div>
    </div>
</template>

<script>
import Loader from "../components/Loader.vue";

export default {
    data() {
        return {
            loaded: false,

            targets: [],
            categories: [],

            selected_subcategory: "",

            order: false,
            field: "title",
        };
    },

};

</script>
