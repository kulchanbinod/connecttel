<template>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="align-middle inline-block min-w-full">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <div class="px-6 py-3 text-left bg-gray-50 font-bold text-gray-500 uppercase tracking-wider">
                  {{ company.symbol }}
                </div>
                <div class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                      <img class="h-10 w-10 rounded-full" :src=company.image alt="">
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        {{ company.companyName }}
                      </div>
                      <div class="text-sm text-gray-500">
                        {{ company.address }}, {{ company.country }}
                      </div>
                      <div class="text-sm text-gray-500">
                        CEO {{ company.ceo }}
                      </div>
                    </div>
                  </div>
                </div>

                <div class="px-6 py-4">
                  <div class="flex items-center">
                    <div class="">
                      <div class="text-sm font-medium text-gray-500">
                        {{ company.description }}
                      </div>
                    </div>
                  </div>
                </div>

                <div class="flex px-6 pb-4">
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        Currency
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ company.currency }}
                    </div>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        Exchange
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ company.exchange }}({{ company.exchangeShortName }})
                    </div>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        Website
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ company.website }}
                    </div>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        Sector
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ company.sector }}
                    </div>
                  </div>
                </div>

                <div class="flex px-6 pb-4">
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        Market Cap
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ company.mktCap }}
                    </div>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        Vol Avg
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ company.exchange }}
                    </div>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        IPO Date
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ company.ipoDate }}
                    </div>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        isin
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ company.isin }}
                    </div>
                  </div>
                </div>

              </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Head,
            Link,
        },

        props: {
          company: Object
        }
    })
</script>