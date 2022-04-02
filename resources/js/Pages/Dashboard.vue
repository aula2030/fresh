<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { ref } from 'vue'

const props = defineProps({
    orders: Object
});

const state = ref({ orders: props.orders });

function processNew(data) {
    const newOrder = {
        reference: data.reference,
        date: data.date,
        customer: data.customer,
        address: data.address,
        country: data.country,
        products: data.products,
        state: data.state
    };
    state.value.orders.unshift(newOrder);
    state.value.orders.splice(-1);
}

Pusher.logToConsole = true;

Echo.private('whole-cow-356')
    .listen('NewOrderCreated', (e) => {
        processNew(JSON.parse(e.order));
    });

</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Last 30 orders
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="bg-gray-200 py-3">
                                <tr>
                                    <th class="px-6 py-3 text-xs text-gray-500">Reference</th>
                                    <th class="px-6 py-3 text-xs text-gray-500">Date</th>
                                    <th class="px-6 py-3 text-xs text-gray-500">Customer</th>
                                    <th class="px-6 py-3 text-xs text-gray-500">Address</th>
                                    <th class="px-6 py-3 text-xs text-gray-500">Country</th>
                                    <th class="px-6 py-3 text-xs text-gray-500">List of products</th>
                                    <th class="px-6 py-3 text-xs text-gray-500">State</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-300">
                                <tr v-for="order in state.orders" :key="order.id" class="hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4 text-sm text-gray-500 text-right">{{ order.reference }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{ order.date }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ order.customer }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ order.address }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ order.country }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ order.products.join(', ') }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ order.state}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
