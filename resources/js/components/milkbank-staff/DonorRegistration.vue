<template>
    <div class="container">
        <form-wizard @on-complete="onComplete">
            <h2 slot="title">Donor Registration</h2> 
            <tab-content title="Personal Information"
                        icon="fa fa-user">
            <div class="card">
                    <div class="card-header">Personal Information</div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="donorLname">Surname</label>
                                    <input type="text" class="form-control" id="donorLname" placeholder="Dela Cruz">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="donorFname">First Name</label>
                                    <input type="text" class="form-control" id="donorFname" placeholder="Juana">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="donorMname">Middle Name</label>
                                    <input type="text" class="form-control" id="donorMname" placeholder="Florida">
                                </div>
                            </div>
                            <div class="form row">
                                <div class="form-group col-md-4">
                                    <label for="donorDob">Date of Birth</label>
                                    <div class='input-group date' id='donorDob'>
                                    <input type='text' class="form-control" />
                                    
                                </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="donorAge">Age</label>
                                    <input type="text" class="form-control" id="donorAge" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="donorSex">Sex</label>
                                    <select class="form-control" id="donorSex">
                                        <option>Female</option>
                                        <option>Male</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Contact Details"
                        icon="fa fa-address-book">
            <div class="card">
                    <div class="card-header">Contact Details</div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="homeAddress">Home Address</label>
                                    <input type="text" class="form-control" id="homeAddress">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="hometelephone">Home Telephone</label>
                                    <input type="text" class="form-control" id="homeTelephone">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="officeAddress">Office Address</label>
                                    <input type="text" class="form-control" id="officeAddress">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="officeTelephone">Office Telephone</label>
                                    <input type="text" class="form-control" id="officeTelephone">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="occupation">Occupation</label>
                                    <input type="text" class="form-control" id="occupation">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="donorType">Type of Donor</label>
                                <select class="form-control" id="donorType">
                                    <option>Community</option>
                                    <option>Private</option>
                                    <option>Employee</option>
                                    <option>Network office/agency</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Initial Donor Screening"
                        icon="fa fa-file">
            My first tab content
            </tab-content>
            <tab-content title="Medical History"
                        icon="fa fa-book-medical">
            My first tab content
            </tab-content>
            <tab-content title="Sexual History"
                        icon="fa fa-venus-mars">
            My first tab content
            </tab-content>
            <tab-content title="Donor's Child Information"
                        icon="fa fa-baby">
            <div class="card">
                <div class="card-header">Donor's Child Information</div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="childLname">Surname</label>
                                    <input type="text" class="form-control" id="childLname" placeholder="Dela Cruz">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="childFname">First Name</label>
                                    <input type="text" class="form-control" id="childFname" placeholder="Juana">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="childMname">Middle Name</label>
                                    <input type="text" class="form-control" id="childMname" placeholder="Florida">
                                </div>
                            </div>
                            <div class="form row">
                                <div class="form-group col-md-8">
                                    <label for="childDob">Date of Birth</label>
                                    <div class='input-group date' id='childDob'>
                                    <input type='text' class="form-control" />
                                    
                                </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="childAge">Age</label>
                                    <input type="text" class="form-control" id="shildAge" readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="childSex">Sex</label>
                                    <select class="form-control" id="childSex">
                                        <option>Female</option>
                                        <option>Male</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="childBirthWeight">Birth Weight</label>
                                    <input type="text" class="form-control" id="childBirthWeight">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="aog">AOG</label>
                                    <input type="text" class="form-control" id="aog" >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Last step"
                        icon="fa fa-check">
            <h3>Thank you for being part of Mamay. We'll let you know if you are qualified for becoming a donor!</h3>
            </tab-content>
        </form-wizard>
    </div>
</template>

<script>
    
    export default {
        mounted() {
            console.log('Component mounted.')
            Vue.use(VueFormWizard) 
        },
        methods: {
            onComplete: function(){
                alert('Yay. Done!');
                }
            }
    }
</script>
