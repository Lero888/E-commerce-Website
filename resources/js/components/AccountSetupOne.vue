<template>

    <div id="setupForm">
        <form>
        
            <h2 class="text-center">Tell us a little about yourself</h2>

            <div style="text-align:center;">
                <span id="step" class="active"></span>
                <span id="step"></span>
            </div>

            <br>
            <div class="form-group">
                <label for="selling">Are you already selling?</label>
                <select class="form-control" id="selling" v-model="selectedOne">
                    <option disabled value="">Please choose one...</option>
                    <option value="playing">I'm just playing around</option>
                    <option value="not-selling">I'm not selling product yet</option>
                    <option value="not-online">I'm selling, just not online</option>
                    <option value="different-system">I sell with a different system</option>
                </select>
            </div>

            <div class="form-group">
                <label for="revenue">What is your current revenue?</label>
                <select class="form-control" id="revenue" v-model="selectedTwo">
                    <option disabled value="">Please choose one...</option>
                    <option value="0">RM0 MYR (I'm just getting started)</option>
                    <option value="50">Up to RM5,000 MYR</option>
                    <option value="5000">RM5,000 MYR to RM50,000 MYR</option>
                    <option value="dream">RM1,000,000 MYR+</option>
                </select>
            </div>

            <div class="form-group">
                <label for="industry">Which industry will you be operating in?</label>
                <select class="form-control" id="industry" v-model="selectedThree">
                    <option disabled value="">Please choose one...</option>
                    <option value="beauty">Beauty</option>
                    <option value="clothing">Clothing</option>
                    <option value="eletronic">Electronic</option>
                    <option value="handcraft">Handcraft</option>
                    <option value="jewelry">Jewelry</option>
                    <option value="painting">Painting</option>
                    <option value="photography">Photography</option>
                    <option value="restaurant">Restaurant</option>
                </select>
            </div>

            <div class="form-group">
                <label for="set_up">Are you setting up a store for a client?</label>
                <br>
                <div class="btn-group" data-toggle="buttons">
                    <label>
                        <input type="checkbox" name="" id="" autocomplete="off" v-model="checked">
                        Yes, I'm designing/developing a store for a client
                    </label>                                
                </div>
            </div>

            <button type="button" class="btn btn-default" id="skipBtn" v-on:click="next">Skip</button> 
            <button class="btn btn-primary" id="nextBtn" v-on:click="next">Next</button>
        </form>
    </div>

</template>

<script>
export default {

    name: "acc-setup-one",
    data: function() {

        return {

        }
        
    },
    mounted() {

        console.log('Component ready')
    },
    methods: {

        next: function() {

            this.$parent.closeAccSetupOneForm();
            this.$parent.openAccSetupTwoForm();

        }
    }

}
</script>

<style>
    


</style>