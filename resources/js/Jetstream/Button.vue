<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 button-color border border-transparent rounded-md font-bold text-sm text-white uppercase  hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
        <slot></slot>
    </button>
</template>

<script>
    export default {
        props: {
            type: {
                type: String,
                default: 'submit',
            },
        }
    }
</script>
<style scoped>
.button-color {
    background-color: #f7a53a;
}
</style>
