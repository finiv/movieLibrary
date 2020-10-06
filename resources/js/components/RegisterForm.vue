<template>
    <div>
        <form>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" />
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" rows="5" />
            </div>
            <div class="row">
                <app_select :classes="'m-l-15'" :multiple="true" :options="this.genres"></app_select>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</template>

<script>
    import app_select from './Form/AppSelect';

    export default {
        name: "RegisterForm",
        components: {
            app_select
        },
        data() {
            return {
                genres: [],
            }
        },
        created() {
            axios.get('api/genres/genres').then((response) => {
                this.genres = response.data;
            });
        }
    }

</script>

<style scoped>
    button {
        margin: 5px;
    }
</style>
