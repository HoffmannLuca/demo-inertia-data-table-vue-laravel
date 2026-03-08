<script setup lang="ts">
import { useDataTable } from '@starter-solutions/inertia-data-table-vue';
import PlaceholderPattern from './PlaceholderPattern.vue';

const props = defineProps<{
    tableKey: string;
}>();

const table = useDataTable(props.tableKey);
</script>

<template>
    <div>
        <div class="overflow-x-auto rounded-xl p-4">
            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                <div
                    class="rounded-xl border border-sidebar-border/70 bg-orange-400 p-2 text-sm text-black dark:border-sidebar-border"
                >
                    <pre>
"pagination": {{
                            {
                                page: table.pagination.value?.current_page,
                                perPage: table.pagination.value?.per_page,
                                sortBy: table.pagination.value?.sort_by,
                                descending: table.pagination.value?.descending,
                            }
                        }}
                        </pre
                    >
                </div>
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border"
                >
                    <PlaceholderPattern />
                </div>
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border"
                >
                    <PlaceholderPattern />
                </div>
            </div>
        </div>

        <div class="h-full overflow-x-auto rounded-xl p-4">
            <div
                class="overflow-hidden rounded-xl border border-sidebar-border/70 bg-accent p-2 dark:border-sidebar-border"
            >
                <pre>"data": {{ table.data }}</pre>
            </div>
        </div>
    </div>
</template>
