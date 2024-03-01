<template>
  <div>
    <Head title="Dashboard"/>
    <h1 class="mb-8 text-3xl font-bold">Страница выплат </h1>
  </div>

  <h1>Условия выплат:</h1>
  <div class="bg-white rounded-md shadow overflow-x-auto w-1/2 mt-3">

    <table class="w-full whitespace-nowrap">
      <tr class="text-left font-bold">
        <th class="pb-4 pt-6 px-6 border-r-2">Тип выплат</th>
        <th class="pb-4 pt-6 px-6">% комиссии</th>
      </tr>

      <tr class="focus-within:bg-gray-100">

        <td class="w-px border-t p-2.5 border-r-2">
          <h1>ИП/Самозанятый РФ</h1>
        </td>
        <td class="w-px border-t pl-2">
          <spa>0</spa>
        </td>
      </tr>


      <tr class="focus-within:bg-gray-100">

        <td class="w-px border-t p-2.5 border-r-2">
          <spa>USDT-TRC 20</spa>
        </td>
        <td class="w-px border-t p-2.5 pl">
          <spa>15%</spa>
        </td>
      </tr>

      <tr class="focus-within:bg-gray-100">

        <td class="w-px border-t p-2.5 border-r-2">
          <spa>Capitalist</spa>
        </td>
        <td class="w-px border-t p-2.5">
          <spa>5%</spa>
        </td>
      </tr>

      <tr class="focus-within:bg-gray-100">

        <td class="w-px border-t p-2.5 border-r-2">
          <spa>СПБ РФ</spa>
        </td>
        <td class="w-px border-t p-2.5">
          <spa>20%</spa>
        </td>
      </tr>
    </table>
  </div>

  <loading-button :loading="form.processing" class="btn-indigo ml-auto" type="submit">
    <a href="https://t.me/smspoisk_manager" class="text-white">Запросить выплату</a>
  </loading-button>

  <div class="bg-white rounded-md shadow overflow-x-auto mt-4">
    <table class="w-full whitespace-nowrap">
      <tr class="text-left font-bold">
        <th class="pb-4 pt-6 px-6 border-r-2">Дата</th>
        <th class="pb-4 pt-6 px-6 border-r-2">Валюта</th>
        <th class="pb-4 pt-6 px-6 border-r-2">Сумма</th>
        <th class="pb-4 pt-6 px-6">Тип</th>
      </tr>
      <tr v-for="payment in payments.data" :key="payment.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
        <td class="w-px border-t p-2.5 border-r-2">
          {{ payment.created_at }}
        </td>

        <td class="w-px border-t p-2.5 border-r-2">
          {{ payment.currency }}
        </td>

        <td class="w-px border-t p-2.5 border-r-2">
          {{ payment.amount }}
        </td>

        <td class="w-px border-t p-2.5 border-r-2">
          {{ payment.type }}
        </td>

      </tr>

    </table>
  </div>

</template>

<script>
import {Head} from '@inertiajs/inertia-vue3'
import Layout from '@/Shared/Layout'
import LoadingButton from "@/Shared/LoadingButton.vue";

export default {
  components: {
    LoadingButton,
    Head,
  },
  layout: Layout,

  props: {
    telegramm: String,
    payments: Object,
  },

  data() {
    return {
      form: this.$inertia.form({}),
    }
  },
}
</script>
