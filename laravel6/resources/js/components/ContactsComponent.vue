<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ title }}</div>

                    <ul>
                        <li v-for="contact in contacts" v-bind:key="contact.id">
                            {{ contact.firstname }} {{ contact.lastname }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios
                .get('api/contacts')
                .then(response => (this.contacts = response.data));
        },
        data: function() {
            return {
                title: 'Contacts',
                contacts: [] 
            }
        }
    }
</script>