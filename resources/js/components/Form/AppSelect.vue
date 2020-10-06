<template>
    <div :class="this.classes">
        <multiselect :class="this.classes" v-model="value" :options="this.$props.options" :close-on-select="false" :multiple="true"></multiselect>
    </div>
</template>

<script>
    export default {
        name: "app_select",
        props: {
            classes: {
                type: String,
                default: ""
            },
            options: {
                type: Array,
                default: []
            }
        },
        data() {
            return {
                value: null,
            };
        },
    };
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
