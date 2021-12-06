<template>
    <app-layout title="Company">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Company
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="pb-4 mx-auto text-gray-600">
                    <input class="px-1 border border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none shadow-sm" name="search" placeholder="Search" v-model="query" v-on:keyup.enter="postQuery">
                    <div class="italic text-xs text-gray-400 mt-1">
                        Type company symbol and press enter, For e.g. AAPL
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <CompanyDetail :company="company"  v-if="company"/>
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg px-6 py-4" v-else>
                        <div class="font-bold text-gray-900">No data found!!!</div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import CompanyDetail from '@/Components/CompanyDetail.vue'

    export default defineComponent({
        data: function(){
            return {
                query: this.symbol,
            };
        },
        components: {
            AppLayout,
            CompanyDetail,
        },
        props: {
            symbol: String,
            company: Object
        },
        methods: {
            postQuery() {
                this.$inertia.get('/company', { symbol: this.query }, {
                    preserveState: true
                });
            }
        }
    })
</script>
