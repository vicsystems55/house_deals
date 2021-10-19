<template>
  <div>

     <div class="form-group">
      <label for="">Select Category</label>
      <select name="" id="" class="form-control">
        
          <option value="Silver">Silver</option>
          <option value="Silver +">Silver +</option>
      </select>
  </div>
    <paystack
        :amount="amountx"
        :email="email"
        :paystackkey="paystackkey"
        :reference="reference"
        :callback="callback"
        :close="close"
        :embed="false"
        class="btn btn-success btn-block mt-5"
        style=""
    >
       <i ></i>
       Get Started
    </paystack>

  </div>
</template>
 
<script type="text/javascript">
import paystack from 'vue-paystack';
export default {
    components: {
        paystack
    },
     props: ['email', 'amount', 'callback', 'userid', 'listingid'],
    data(){
        return{
          paystackkey: "pk_test_ea7b39208f5b73d258c1f90cc27b1f5fbf716c01", //paystack public key
          email: this.email, // Customer email
          amountx: this.amount * 100,
          callback: this.callback +'/'+this.userid +'/'+this.listingid,
          // in kobo
        }
    },
    computed: {
      reference(){
        let text = "";
        let possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
 
        for( let i=0; i < 10; i++ )
          text += possible.charAt(Math.floor(Math.random() * possible.length));
 
        return text;
      }
    },
    methods: {
      callback: function(response){
        console.log(response)
      },
      close: function(){
          console.log("Payment closed")
      }
    },

    mounted() {
      console.log('mounted');
    },
}
</script>