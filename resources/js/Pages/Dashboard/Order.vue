<script setup>
defineProps({
    orders: {
        type: Array,
        default: [],
    },
});
</script>

<template>
    <tr v-for="order in orders" :key="order.id" class="hover:bg-gray-100 dark:hover:bg-gray-600">
        <td class="px-6 py-4 text-sm text-gray-500 text-right">{{ order.reference }}</td>
        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{ order.date }}</td>
        <td class="px-6 py-4 text-sm text-gray-500">{{ order.customer }}</td>
        <td class="px-6 py-4 text-sm text-gray-500">{{ order.address }}</td>
        <td class="px-6 py-4 text-sm text-gray-500">{{ order.country }}</td>
        <td class="px-6 py-4 text-sm text-gray-500">{{ order.products.join(', ') }}</td>
        <td class="px-6 py-4 text-sm text-gray-500">{{ order.state}}</td>
    </tr>
</template>

