<template>
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
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</template>

<script>
    export default {
        name: "RegisterForm"
    }
</script>

<style scoped>

</style>
