<template>
    <card class="flex flex-col items-center justify-center">
        <div class="px-3 py-3">
            <h1 class="text-center text-3xl text-80 font-light mt-4 mb-4">Nova Releases</h1>

            Latest version: {{ current_release_version }}<br><br>

            Installed version: {{ installed_version }}<br><br>
        </div>
    </card>
</template>

<script>
export default {
    props: ['card'],

    data: () => {
        return {
            installed_version: null,
            releases: [],
            current_release_version: null,
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
}
</script>
