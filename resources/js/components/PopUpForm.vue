<template>
    <!-- Start New Trial Overlay -->
    <div  id="overlay">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Start your free 14-day trial of Shopify</h5>
                    <button type="button" class="close" v-on:click="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body p-4">
                        <!-- <form v-on:submit.prevent="submitForm" method="post" action='register'> -->
                        <form action="register" method="POST">
                        
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" v-model="email" placeholder="Email Address">
                                <div class="error">{{ this.errors.email }}</div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" v-model="password" placeholder="Password">
                                <div class="error">{{ this.errors.password }}</div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="store_name" id="store_name" class="form-control" v-model="store_name" placeholder="Your store name">
                                <div class="error">{{ this.errors.store_name }}</div>
                            </div>
                            <br>
                            <div class="form-group">
                                <button id="btn-create" type="submit" class="btn btn-primary">Create your store</button>
                            </div>
                            <input type="hidden" name="_token" :value="csrf">
                        </form>
                    </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: ['register'],

    data: function() {

        return {
            csrf: document.head.querySelector('meta[name="csrf-token"]').content,
            errors: {},
            email: null,
            password: null,
            store_name: null,
        }
        
    },

    methods: {

        // Closing form witn 'x' button
        close: function() {

            this.$parent.closeForm(); //code smell
            // this.$emit('close');
            
        },

        // Form validation
        submitForm: function (e) {

            alert(e.type);  

            // if (this.email && this.password && this.store_name) {
            //     emailValid = true;
            //     passValid = true;
            //     storeNameValid = true;
            //     return true;
            // }

            this.errors = {}

            if(!this.email) {
                
                this.errors.email = 'Please enter an email address';

            } else if (!this.validEmail(this.email)) {
                this.errors.email = 'Please enter a valid email address.';                

            }
            if(!this.password) {

                this.errors.password = 'Please enter a password';

            }
            if(!this.store_name) {

                this.errors.store_name = 'Please enter a store name';
            }

            if (!this.errors.length) {
                return true;
            }

            console.log('almost end');
            // cancels the event if it is cancelable
            e.preventDefault();


        },

        // Validate email with regex
        validEmail: function (email) {
            var regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return regex.test(email);
        },

        send: function() {
            alert('Are you sure you want to submit?');
            console.log("come");
        }

    },

}

</script>

<style>

</style>