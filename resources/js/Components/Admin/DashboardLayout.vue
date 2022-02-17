<template>
    <div class="flex h-screen bg-gray-200 font-roboto">
        <Sidebar :isOpen="open" @resetSidebar="open = false" />

        <div class="flex flex-col flex-1 overflow-hidden">
            <Header @toggleSidebar="open = true" />
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container px-6 py-8 mx-auto">
                    <slot />
                </div>
            </main>
        </div>
    </div>
</template>

<script>
import Header from "./Header.vue"
import Sidebar from "./Sidebar.vue"
export default {
    components: {
        Header,
        Sidebar
    },
    data() {
        return {
            open: false
        }
    },
    methods: {
        showSidebar: function () {
            this.open = true;
        }
    }
}
</script>
