<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '@/components/PlaceholderPattern.vue';
import { useDataTable } from '@starter-solutions/inertia-data-table-vue';

const userTable = useDataTable('users');
</script>

<template>
    <Head title="Demo" />

    <div id="demo">
        <div
            class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4"
        >
            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                <div
                    class="rounded-xl border border-sidebar-border/70 bg-orange-400 p-2 text-black dark:border-sidebar-border"
                >
                    <pre>
"pagination": {{
                            {
                                page: userTable.pagination.value?.current_page,
                                perPage: userTable.pagination.value?.per_page,
                                sortBy: userTable.pagination.value?.sort_by,
                                descending:
                                    userTable.pagination.value?.descending,
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

        <div
            class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4"
        >
            <div
                class="rounded-xl border border-sidebar-border/70 bg-accent p-2 dark:border-sidebar-border"
            >
                <pre>"data": {{ userTable.data }}</pre>
            </div>
        </div>
    </div>
</template>
