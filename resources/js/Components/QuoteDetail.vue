<template>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="align-middle inline-block min-w-full">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <div class="px-6 py-3 text-left bg-gray-50 font-bold text-gray-500 uppercase tracking-wider">
                  {{ quote.symbol }}
                </div>
                <div class="flex px-6 py-4">
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        Name
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ quote.name }}
                    </div>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        Price
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ quote.price }}
                    </div>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        Change Percentage
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ quote.changesPercentage }}
                    </div>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        Change
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ quote.change }}
                    </div>
                  </div>
                </div>

                <div class="flex px-6 pb-4">
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        Day Low
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ quote.dayLow }}
                    </div>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        Day High
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ quote.dayHigh }}
                    </div>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        Year Low
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ quote.yearLow }}
                    </div>
                  </div>
                  <div class="flex-1">
                    <div class="text-sm font-bold text-gray-900">
                        Year High
                    </div>
                    <div class="text-sm font-medium text-gray-500">
                        {{ quote.yearHigh }}
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
          quote: Object
        }
    })
</script>