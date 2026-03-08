<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import InertiaDataTable from '@/components/InertiaDataTable.vue';
</script>

<template>
    <Head title="Demo" />

    <div id="demo" class="flex h-full gap-2">
        <InertiaDataTable tableKey="usersWrapped" />
        <InertiaDataTable tableKey="usersFlat" />
    </div>
</template>
