
<template>
    <card class="flex flex-col items-center justify-center">
        <a href="https://nova.laravel.com/releases" class="px-3 py-4 flex flex-col items-center no-underline text-80" v-show="loaded" target="_blank">
            <h2 class="text-center text-2xl text-80 font-light">
                <span class="pb-4" v-if="outOfDate">Nova is out of date</span>
                <span class="pb-4" v-else>Nova is up to date</span>
                <svg v-if="outOfDate" class="align-middle fill-current text-warning w-8 h-8 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"/></svg>
                <svg v-else class="align-middle fill-current text-info w-8 h-8 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
            </h2>

            <div class="mt-4">
                <span class="text-70">Latest:</span> <span v-bind:class="{ 'text-90': outOfDate }">v{{ current_release_version }}</span>
                |
                <span class="text-70">Installed:</span> v{{ installed_version }}
            </div>
        </a>
    </card>
</template>

<script>
export default {
    props: ['card'],

    data: () => {
        return {
            installed_version: null,
            releases: [],
            current_release_version: null
        };
    },

    mounted() {
        Nova.request().get('/nova-vendor/nova-releases/releases').then(response => {
            this.releases = response.data.releases;
            this.current_release_version = response.data.current_version;
        });

        Nova.request().get('/nova-vendor/nova-releases/installed-version').then(response => {
            this.installed_version = response.data.installed_version;
        });
    },

    computed: {
        outOfDate: function () {
            return this.installed_version !== this.current_release_version;
        },
        loaded: function () {
            return (this.installed_version !== null && this.current_release_version !== null);
        }
    }
}
</script>
