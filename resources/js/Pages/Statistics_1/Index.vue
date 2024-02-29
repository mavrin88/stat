<template>
  <div>
    <Head title="Dashboard" />
    <h1 class="mb-8 text-3xl font-bold">Страница Конверсии</h1>
  </div>

  <div class="bg-white rounded-md shadow overflow-x-auto mt-4">
    <table class="w-full whitespace-nowrap">
      <tr class="text-left font-bold">
        <th class="pb-4 pt-6 px-6 border-r-2">Дата</th>
        <th class="pb-4 pt-6 px-6 border-r-2">Тип</th>
        <th class="pb-4 pt-6 px-6">Сумма</th>
        <th class="pb-4 pt-6 px-6 border-r-2">s1</th>
        <th class="pb-4 pt-6 px-6 border-r-2">s2</th>
        <th class="pb-4 pt-6 px-6 border-r-2">s3</th>
        <th class="pb-4 pt-6 px-6 border-r-2">s4</th>
        <th class="pb-4 pt-6 px-6 border-r-2">s5</th>
      </tr>
      <!--      <tr v-for="payment in payments" :key="payment.id" class="hover:bg-gray-100 focus-within:bg-gray-100">-->
      <!--        <td class="w-px border-t p-2.5 border-r-2">-->
      <!--          {{ payment.created_at }}-->
      <!--        </td>-->

      <!--        <td class="w-px border-t p-2.5 border-r-2">-->
      <!--          {{ payment.currency }}-->
      <!--        </td>-->

      <!--        <td class="w-px border-t p-2.5 border-r-2">-->
      <!--          {{ payment.amount }}-->
      <!--        </td>-->

      <!--        <td class="w-px border-t p-2.5 border-r-2">-->
      <!--          {{ payment.type }}-->
      <!--        </td>-->

      <!--      </tr>-->
      <!--      <tr v-if="payment.length === 0">-->
      <!--        <td class="px-6 py-4 border-t" colspan="4">No contacts found.</td>-->
      <!--      </tr>-->
    </table>
  </div>

</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import Layout from '@/Shared/Layout'

export default {
  components: {
    Head,
  },
  layout: Layout,
}
</script>
