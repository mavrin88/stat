<template>
  <div>
    <Head title="Главная" />
    <h1 class="mb-8 text-3xl font-bold">Главная
    </h1>
  </div>

<!--  <div class="container">-->
<!--    <div class="row">-->
<!--      &lt;!&ndash; Ваши предыдущие блоки &ndash;&gt;-->

<!--      <div class="col-md-4">-->
<!--      <div class="flex items-center px-8 py-4 bg-gray-50 border-t border-gray-100 mb-8 w-1/2">-->
<!--        <button class="text-gray-600 hover:underline" tabindex="-1" type="button" title="Ваша тип партнерства Revenue share">-->
<!--          Ваша тип партнерства Revenue share-->
<!--        </button>-->
<!--      </div>-->
<!--      </div>-->
<!--      &lt;!&ndash; Блок с виджетами &ndash;&gt;-->
<!--      <div class="col-md-4">-->
<!--        <div v-if="widget_total_income.length > 0" class="card mb-4">-->
<!--          <div class="card-body">-->
<!--            <h6 class="text-uppercase text-muted mb-2">Текущий баланс за весь период:</h6>-->
<!--            <span class="badge bg-info-soft mt-n1">Баланс</span>-->
<!--            <span class="text-2xl pl-2 pr-2 pt-4">{{widget_total_income}}</span>-->
<!--          </div>-->
<!--        </div>-->

<!--        <div v-if="widget_total_income.length > 0" class="card mb-4">-->
<!--          <div class="card-body">-->
<!--            <h6 class="text-uppercase text-muted mb-2">Доступные балансы:</h6>-->
<!--            <span class="badge bg-info-soft mt-n1">Доступно для вывода</span>-->
<!--            <span class="text-2xl pl-2 pr-2 pt-4">{{widget_total_income}}</span>-->
<!--          </div>-->
<!--        </div>-->

<!--        <div v-if="widget_total_income.length > 0" class="card mb-4">-->
<!--          <div class="card-body">-->
<!--            <h6 class="text-uppercase text-muted mb-2">Подписчиков за весь период:</h6>-->
<!--            <span class="badge bg-info-soft mt-n1">Всего подписчиков</span>-->
<!--            <span class="text-2xl pl-2 pr-2 pt-4">{{widget_total_income}}</span>-->
<!--          </div>-->
<!--        </div>-->

<!--        <div v-if="widget_total_income.length > 0" class="card">-->
<!--          <div class="card-body">-->
<!--            <h6 class="text-uppercase text-muted mb-2">Активных подписчиков:</h6>-->
<!--            <span class="badge bg-info-soft">Активных подписчиков</span>-->
<!--            <span class="text-2xl pl-2 pr-2 pt-4">{{widget_total_income}}</span>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->










<!--  <div>-->
<!--    &lt;!&ndash; Ваши предыдущие блоки &ndash;&gt;-->

<!--      <div class="flex items-center px-8 py-4 bg-gray-50 border-t border-gray-100 mb-8 w-1/2">-->
<!--        <button class="text-gray-600 hover:underline" tabindex="-1" type="button" title="Ваша тип партнерства Revenue share">-->
<!--          Ваша тип партнерства Revenue share-->
<!--        </button>-->
<!--      </div>-->
<!--&lt;!&ndash;      <div class="flex items-center px-8 py-4 bg-gray-50 border-t border-gray-100 mb-8">&ndash;&gt;-->
<!--&lt;!&ndash;        <div class="border-2 border-green-300 p-1 mr-2">&ndash;&gt;-->
<!--&lt;!&ndash;          <h1>Лэнд 1:</h1>&ndash;&gt;-->
<!--&lt;!&ndash;        </div>&ndash;&gt;-->
<!--&lt;!&ndash;        <div class=" hover:underline text-blue-600">&ndash;&gt;-->
<!--&lt;!&ndash;          <a :href="Lend_1">https://smspoisk.ru/source={{source_name}}</a>&ndash;&gt;-->
<!--&lt;!&ndash;        </div>&ndash;&gt;-->
<!--&lt;!&ndash;      </div>&ndash;&gt;-->

<!--&lt;!&ndash;      <div class="flex items-center px-8 py-4 bg-gray-50 border-t border-gray-100 mb-8">&ndash;&gt;-->
<!--&lt;!&ndash;        <div class="border-2 border-green-300 p-1 mr-2">&ndash;&gt;-->
<!--&lt;!&ndash;          <h1>Лэнд 2 (с прогревом перед регистрацией):</h1>&ndash;&gt;-->
<!--&lt;!&ndash;        </div>&ndash;&gt;-->
<!--&lt;!&ndash;        <div class=" hover:underline text-blue-600">&ndash;&gt;-->
<!--&lt;!&ndash;          <a :href="Lend_2"> https://smspoisk.ru/land2/?source={{source_name}}</a>&ndash;&gt;-->
<!--&lt;!&ndash;        </div>&ndash;&gt;-->
<!--&lt;!&ndash;      </div>&ndash;&gt;-->

<!--&lt;!&ndash;      <div class="flex items-center px-8 py-4 bg-gray-50 border-t border-gray-100 mb-8">&ndash;&gt;-->
<!--&lt;!&ndash;        <div class="border-2 border-green-300 p-1 mr-2 w-1/2">&ndash;&gt;-->
<!--&lt;!&ndash;          <h1>Использование параметра source в ссылке обязательно и его значение нельзя менять! Для дополнительной атрибуции трафика Вы можете использовать параметры URL: s1, s2, s3, s4, s5. Т.о. Трекинг ссылка будет вида:&ndash;&gt;-->
<!--&lt;!&ndash;          </h1>&ndash;&gt;-->
<!--&lt;!&ndash;        </div>&ndash;&gt;-->
<!--&lt;!&ndash;        <div class=" hover:underline text-blue-600">&ndash;&gt;-->
<!--&lt;!&ndash;          <a :href="Lend_2"> https://smspoisk.ru/land2/?source={{source_name}}</a>&ndash;&gt;-->
<!--&lt;!&ndash;        </div>&ndash;&gt;-->
<!--&lt;!&ndash;      </div>&ndash;&gt;-->

<!--    &lt;!&ndash; Ваши блоки с виджетами &ndash;&gt;-->
<!--    <div style="display: flex; flex-direction: column; align-items: flex-end; margin-right: 20px;">-->
<!--&lt;!&ndash;      <div style="display: flex; justify-content: flex-end; margin-right: 20px;">&ndash;&gt;-->
<!--      <div v-if="widget_total_income.length > 0" class="card w-1/5 mb-4">-->
<!--        <div class="card-body">-->
<!--          <div class="row align-items-center gx-0">-->
<!--            <div class="col">-->
<!--              &lt;!&ndash; Title &ndash;&gt;-->
<!--              <h6 class="text-uppercase text-muted mb-2">-->
<!--                Текущий баланс за весь период:-->
<!--              </h6>-->
<!--              &lt;!&ndash; Badge &ndash;&gt;-->
<!--              <span class="badge bg-info-soft mt-n1">Баланс</span>-->
<!--              &lt;!&ndash; Heading &ndash;&gt;-->
<!--              <span class="text-2xl pl-2 pr-2 pt-4">{{widget_total_income}}</span>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->

<!--      <div v-if="widget_total_income.length > 0" class="card w-1/5 mb-4">-->
<!--        <div class="card-body">-->
<!--          <div class="row align-items-center gx-0">-->
<!--            <div class="col">-->
<!--              &lt;!&ndash; Title &ndash;&gt;-->
<!--              <h6 class="text-uppercase text-muted mb-2">-->
<!--                Доступные балансы:-->
<!--              </h6>-->
<!--              &lt;!&ndash; Badge &ndash;&gt;-->
<!--              <span class="badge bg-info-soft mt-n1">Доступно для вывода</span>-->
<!--              &lt;!&ndash; Heading &ndash;&gt;-->
<!--              <span class="text-2xl pl-2 pr-2 pt-4">{{widget_total_income}}</span>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->

<!--      <div v-if="widget_total_income.length > 0" class="card w-1/5 mb-4">-->
<!--        <div class="card-body">-->
<!--          <div class="row align-items-center gx-0">-->
<!--            <div class="col">-->
<!--              &lt;!&ndash; Title &ndash;&gt;-->
<!--              <h6 class="text-uppercase text-muted mb-2">-->
<!--                Подписчиков за весь период:-->
<!--              </h6>-->
<!--              &lt;!&ndash; Badge &ndash;&gt;-->
<!--              <span class="badge bg-info-soft mt-n1">Всего подписчиков</span>-->
<!--              &lt;!&ndash; Heading &ndash;&gt;-->
<!--              <span class="text-2xl pl-2 pr-2 pt-4">{{widget_total_income}}</span>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->

<!--      <div v-if="widget_total_income.length > 0" class="card w-1/5">-->
<!--        <div class="card-body">-->
<!--          <div class="row align-items-center gx-0">-->
<!--            <div class="col">-->
<!--              &lt;!&ndash; Title &ndash;&gt;-->
<!--              <h6 class="text-uppercase text-muted mb-2">-->
<!--                Активных подписчиков:-->
<!--              </h6>-->
<!--              &lt;!&ndash; Badge &ndash;&gt;-->
<!--              <span class="badge bg-info-soft ">Активных подписчиков</span>-->
<!--              &lt;!&ndash; Heading &ndash;&gt;-->
<!--              <span class="text-2xl pl-2 pr-2 pt-4">{{widget_total_income}}</span>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->

  <div class="flex items-center px-8 py-4 bg-gray-50 border-t border-gray-100 mb-8">
    <button class="text-gray-600 hover:underline" tabindex="-1" type="button" title="Revenue share -  «разделение доходов». Это распределение общей суммы дохода, полученного от продажи товаров и услуг, между сторонами.">
      Ваша тип партнерства Revenue share(?)
    </button>
  </div>
  <div class="flex items-center px-8 py-4 bg-gray-50 border-t border-gray-100 mb-8">
    <div class="border-2 border-green-300 p-1 mr-2">
      <h1>Лэнд 1:</h1>
    </div>
    <div class=" hover:underline text-blue-600">
      <a :href="Lend_1">https://smspoisk.ru/source={{source_name}}</a>
    </div>
  </div>

  <div class="flex items-center px-8 py-4 bg-gray-50 border-t border-gray-100 mb-8">
    <div class="border-2 border-green-300 p-1 mr-2">
      <h1>Лэнд 2 (с прогревом перед регистрацией):</h1>
    </div>
    <div class=" hover:underline text-blue-600">
      <a :href="Lend_2"> https://smspoisk.ru/land2/?source={{source_name}}</a>
    </div>
  </div>

  <div class="flex items-center px-8 py-4 bg-gray-50 border-t border-gray-100 mb-8">
    <div class="border-2 border-green-300 p-1 mr-2 w-1/2">
      <h1>Использование параметра source в ссылке обязательно и его значение нельзя менять! Для дополнительной атрибуции трафика Вы можете использовать параметры URL: s1, s2, s3, s4, s5. Т.о. Трекинг ссылка будет вида:
      </h1>
    </div>
    <div class=" hover:underline text-blue-600">
      <h1> https://smspoisk.ru/land2/?source={{source_name}}&s1=dzen&s2=article1</h1>
    </div>
  </div>

<!--  Widget -->
  <div style="display: flex; justify-content: center; align-items: center;" class="mb-8">
    <div class="card w-1/5 mr-4">
      <div class="card-body">
        <div class="row align-items-center gx-0">
          <div class="col">
            <!-- Title -->
            <h6 class="text-uppercase text-muted mb-2">
              Текущий баланс за весь период:
            </h6>
            <!-- Badge -->
            <span class="badge bg-info-soft mt-n1">Баланс</span>
            <!-- Heading -->
            <span v-if="widget_total_income.length > 0" class="text-2xl pl-2 pr-2 pt-4">{{widget_total_income}}</span>
            <span v-else class="text-2xl pl-2 pr-2 pt-4">0</span>
          </div>
        </div>
      </div>
    </div>

    <div class="card w-1/5 mr-4">
      <div class="card-body">
        <div class="row align-items-center gx-0">
          <div class="col">
            <!-- Title -->
            <h6 class="text-uppercase text-muted mb-2">
              Доступные балансы:
            </h6>
            <!-- Badge -->
            <span class="badge bg-info-soft mt-n1">Доступно для вывода</span>
            <!-- Heading -->
<!--            <span v-if="widget_available_balances.length > 0" class="text-2xl pl-2 pr-2 pt-4">{{widget_available_balances}}</span>-->
            <span class="text-2xl pl-2 pr-2 pt-4">{{widget_available_balances}}</span>
<!--            <span v-else class="text-2xl pl-2 pr-2 pt-4">0</span>-->
          </div>
        </div>
      </div>
    </div>
{{widget_available_balances.available_balance}}
    <div class="card w-1/5 mr-4">
      <div class="card-body">
        <div class="row align-items-center gx-0">
          <div class="col">
            <!-- Title -->
            <h6 class="text-uppercase text-muted mb-2">
              Подписчиков за весь период:
            </h6>
            <!-- Badge -->
            <span class="badge bg-info-soft mt-n1">Всего подписчиков</span>
            <!-- Heading -->
            <span v-if="widget_total_income.length > 0" class="text-2xl pl-2 pr-2 pt-4">{{widget_period_subscribed}}</span>
            <span v-else class="text-2xl pl-2 pr-2 pt-4">0</span>
          </div>
        </div>
      </div>
    </div>

    <div class="card w-1/5">
      <div class="card-body">
        <div class="row align-items-center gx-0">
          <div class="col">
            <!-- Title -->
            <h6 class="text-uppercase text-muted mb-2">
             Активных подписчиков:
            </h6>
            <!-- Badge -->
            <span class="badge bg-info-soft ">Всего подписчиков</span>
            <!-- Heading -->
<!--            <span v-if="widget_active_subscribed.length == 2" class="text-2xl pl-2 pr-2 pt-4">{{widget_active_subscribed}}</span>-->
            <span class="text-2xl pl-2 pr-2 pt-4">{{widget_active_subscribed}}</span>
<!--            <span v-else class="text-2xl pl-2 pr-2 pt-4">0</span>-->
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="grid md:grid-cols-2 md:gap-6">
    <div  class="relative z-0 w-full mb-6 group">
      <DateInput @keyup="update()" v-model:value="form.dateFrom" title="Дата с" type="date"/>
    </div>
    <div  class="relative z-0 w-full mb-6 group">
      <DateInput @keyup="update()" v-model:value="form.dateTo" title="Дата по" type="date"/>
    </div>

  </div>

  <div class="bg-white rounded-md shadow overflow-x-auto mt-4">
    <table class="w-full whitespace-nowrap">
      <tr class="text-left font-bold">
        <th class="pb-4 pt-6 px-6 border-r-2">Дата</th>
        <th class="pb-4 pt-6 px-6 border-r-2">Регистраций</th>
        <th class="pb-4 pt-6 px-6 border-r-2">Подписок</th>
        <th class="pb-4 pt-6 px-6">Конверсий</th>
        <th class="pb-4 pt-6 px-6">Сумма</th>
      </tr>
      <tr v-for="items in tableScribers" :key="items.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
        <td class="w-px border-t p-2.5 border-r-2">
          {{ items.day }}
        </td>

<!--        <td class="w-px border-t p-2.5 border-r-2">-->
<!--          {{ payment.currency }}-->
<!--        </td>-->

<!--        <td class="w-px border-t p-2.5 border-r-2">-->
<!--          {{ payment.amount }}-->
<!--        </td>-->

<!--        <td class="w-px border-t p-2.5 border-r-2">-->
<!--          {{ payment.type }}-->
<!--        </td>-->

      </tr>
<!--            <tr v-if="tableScribers.length === 0">-->
<!--              <td class="px-6 py-4 border-t" colspan="4">No contacts found.</td>-->
<!--            </tr>-->
    </table>
  </div>

</template>

<script>
import {Head} from '@inertiajs/inertia-vue3'
import Layout from '@/Shared/Layout'
import DateInput from '@/Shared/DateInput.vue'
// import {ExpensesService} from "../../services/ExpensesService";
import throttle from "lodash/throttle";
import pickBy from "lodash/pickBy";
// import SearchFilter from '@/Shared/SearchFilter'
import mapValues from "lodash/mapValues";

export default {
  components: {
    Head,DateInput
  },
  layout: Layout,

  props: {
    source_name: String,
    widget_total_income: Number,
    widget_available_balances: Number,
    widget_period_subscribed: Number,
    widget_active_subscribed: Number,
    tableScribers: Array
  },

  data: function () {
    return {
      expenses: [],
      form: {
        dateFrom: '',
        dateTo: '',
      },
      filters: {
        dateFrom: '',
        dateTo: '',
      },
    }
  },

  computed: {
    Lend_1() {
      return `https://smspoisk.ru/source=${this.source_name}`;
    },
    Lend_2() {
      return `https://smspoisk.ru/land2/source=${this.source_name}`;
    },
  },
  methods: {
    update: function () {

    //   ExpensesService.getExpenses(this.filters)
    //     .then(response => this.expenses = response.data.data)
    },
    reset() {
      this.form = mapValues(this.form, () => null)
    },
  },
  watch: {
    form: {
      deep: true,
      handler: throttle(function () {
        this.$inertia.get('/offers', pickBy(this.form), { preserveState: true })
      }, 150),
    },
  },
}
</script>
