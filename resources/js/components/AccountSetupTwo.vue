<template>

    <div id="setupForm" class="container">
        <form>

            <h2 class="text-center">Add an address so you can get paid</h2>
            <h5 class="text-center" style="color:#808080">This will be used as your default business address</h5>
            
            <div style="text-align:center;">
                <span id="step"></span>
                <span id="step" class="active"></span>
            </div>

            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" v-model="first_name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" v-model="last_name">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="add">Address</label>
                <input type="text" class="form-control" id="add" v-model="add">
            </div>

            <div class="form-group">
                <label for="apartment">Apartment, suite, etc.</label>
                <input type="text" class="form-control" id="apartment" v-model="apartment">
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" v-model="city">
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="country">Country/Region</label>
                        <input type="text" class="form-control" id="country" v-model="country">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="state">State/territory</label>
                        <input type="text" class="form-control" id="state" v-model="state">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="postcode">Postcode</label>
                        <input type="text" class="form-control" id="postcode" v-model="postcode">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" v-model="phone">
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="website">Business or personal website </label>
                    <input type="text" class="form-control" id="website" v-model="website">
                </div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="btn-group" data-toggle="buttons">
                    <label>
                        <input type="checkbox" name="" id="" autocomplete="off" v-model="checked">
                        This store is a registered business
                    </label>                                
                </div>
            </div>

            <hr>

            <div>

                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-default" id="skipBtn" v-on:click="back">Back</button>  
                    </div>

                    <div class="col-md-6 text-right">                                           
                        <button type="button" class="btn btn-primary" id="nextBtn" v-on:click="goHome">Enter my store</button>
                            
                    </div>
                </div>

            </div>
        </form>
    </div>
</template>

<script>
export default {

    name: "acc-setup-two",
    methods: {

        back: function() {

            this.$parent.closeAccSetupTwoForm();
            this.$parent.openAccSetupOneForm();

        },
        goHome: function() {
            window.location.href="http://127.0.0.1:8000/home"
        }

    }

}
</script>

<style>

</style>