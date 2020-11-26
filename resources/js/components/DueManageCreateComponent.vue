<template>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="m-0">Supplier Due Manage</h5>

            <div class="btn-group" role="group" aria-level="Action area">
                <a :href="listURL" title="show due manage list" class="btn btn-success" style="margin-right: 5px">
                    <i class="fa fa-list" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <div class="card-body">
            <form method="post" @submit.prevent="save" class="row">
                <!-- start get supplier/customer -->
                <div class="form-group col-md-12 required">
                    <label for="suppliers">Supplier</label>
                    <select id="suppliers" class="form-control" v-model="supplierId" @change="getBalance(supplierId)" required>
                        <option value="null" selected disabled>Choose one</option>
                        <option v-for="(supplier, index) in suppliers" :value="supplier.id" :key="index">{{ supplier.name }}</option>
                    </select>
                </div>
                <!-- end get supplier/customer -->

                <!-- balance for supplier start -->
                <div class="col-md-12">
                    <p class="d-block bg-dark text-light p-1 px-2" v-if="supplierBalance != null">
                        BDT {{ parseFloat(supplierBalance).toFixed(2) }} {{ partyBalanceStatus }}
                    </p>
                </div>
                <!-- balance for supplier end -->

                <div class="form-group col-md-6 required">
                    <label for="date">Date</label>
                    <input v-model="date" type="date" class="form-control" id="date" required>
                </div>

                <div class="form-group col-md-6 required">
                    <label for="payment">Pay Amount</label>
                    <input v-model="amount" type="number" class="form-control" id="payment" placeholder="Enter Amount (BDT)" required>
                </div>

                <div class="form-group col-md-12">
                    <label for="description">Description</label>
                    <textarea v-model="description" class="form-control" id="description" placeholder="Write something (optional)"></textarea>
                </div>

                <div class="form-group col-md-12 text-right">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "DueManageComponent",
    props: ['suppliers'],
    computed: {
        listURL() {
            return baseURL + 'dueManage/'
            console.log(listURL);
        },

        partyBalanceStatus() {
            if (this.supplierBalance >= 0) {
                return "Payable";
            } else {
                return "Receiveable";
            }
        }

    },

    data() {
        return {
            date: new Date().toISOString().substr(0, 10),
            amount: null,
            supplierId: null,
            supplierBalance: null,
            description: '',
        }
    },

    methods: {
        getBalance(id){
            console.log(id);
            this.$awn.asyncBlock(
                axios.post(baseURL + 'get-details-from-supplier', {
                    id: id
                }),
                response => {
                    // set data
                    this.supplierBalance = response.data.balance;
                    // console
                    console.log(response.data);
                })
        },

        save() {
            this.$awn.asyncBlock(
                axios.post(baseURL + 'dueManage', {
                    supplier_id : this.supplierId,
                    date : this.date,
                    amount : this.amount,
                    description : this.description
                }),
                response => {
                    // console.log(this.manageDue);
                    console.log(response.data);
                    this.supplierId = null
                    this.amount = null
                    this.date = null
                    this.description = null
                    this.supplierBalance = null
                    // location.reload(true);
                    // flase message
                    this.$awn.success("Due manage successfully.");
                },
                error => {
                    if (error.response.status === 422) { // validation error
                        this.errors = error.response.data.errors
                        this.$awn.alert('Opps! Enter the valid information of product')
                    } else {
                        this.$awn.alert('Opps! something went wrong. Try again later')
                    }
                })
        },
    },

    mounted() {
        console.log(this.suppliers)
    }
}
</script>

<style scoped>

</style>
