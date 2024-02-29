import axios from "axios";

export class ExpensesService {

    // static getExpenses(filters) {
    //     let url = `http://127.0.0.1:9000/expenses/?` + `&dateFrom=` + filters.dateFrom + '&dateTo=' + filters.dateTo;
    //     return axios.get(url);
    // }

    static getExpenses() {
        let url = `http://127.0.0.1:9000/expenses`;
        return axios.get(url);
    }

}
