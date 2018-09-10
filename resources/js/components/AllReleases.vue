<template>
    <div>
        <heading class="mb-6">Nova Release History</heading>

        <ul class="list-reset">
            <li v-for="release in this.releases" class="bg-white rounded-lg shadow mb-6 max-w-lg">
                <div class="flex flex-col md:flex-row md:items-center border-b border-40 py-4 px-6">
                    <div class="">
                        <div v-if="release.version == installed_version" class="float-right text-sm bg-primary text-white rounded py-1 px-2">CURRENT</div>
                        <p class="text-2xl text-90 mb-2">
                            v{{ release.version }}
                        </p>
                        <p class="text-xs font-bold uppercase tracking-wide text-80 mb-2">
                            {{ release.series }}
                        </p>
                        <p class="text-90">
                            Released {{ formatDate(release.released_at) }}
                        </p>
                    </div>
                    <!--a href="https://nova.laravel.com/releases/17" class="ml-auto no-underline text-center flex w-full md:w-auto justify-center items-center focus:outline-none border-2 border-primary bg-primary hover:border-primary-darker hover:bg-primary-darker px-2 text-white uppercase tracking-wide font-bold h-12 px-6 rounded shadow">
                        Download
                    </a-->
                </div>

                <div class="markdown py-4 px-6" v-html="release.html_notes">
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data: () => {
        return {
            installed_version: null,
            releases: [],
        };
    },

    mounted() {
        Nova.request().get('/nova-vendor/nova-releases/releases').then(response => {
            this.releases = response.data.releases.reverse();
        });

        Nova.request().get('/nova-vendor/nova-releases/installed-version').then(response => {
            this.installed_version = response.data.installed_version;
        });
    },

    methods: {
        formatDate: function (string) {
            return moment(string).format('MMMM Do, YYYY');
        }
    },
}
</script>

<style>
    .markdown {
        font-size: .875rem;
        color: #202c3a;
        line-height: 1.5;
    }

    .markdown ul {
        padding: 0;
        margin-bottom: .75rem;
        margin-top: 0;
        list-style: disc inside;
    }

    .markdown li {
        line-height: 1.5;
    }

    .markdown p {
        font-size: .875rem;
    }

    .markdown h1, .markdown h2, .markdown h3, .markdown h4, .markdown h5, .markdown h6, .markdown p {
        color: #202c3a;
        margin-bottom: .75rem;
    }
</style>
