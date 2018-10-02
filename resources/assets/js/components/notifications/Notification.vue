<template>
    <div>
        <a class="dropdown-item" href="#">
            <b>{{ comment.user.name }}</b> comentou: {{ comment.title }}
        </a>
    </div>
</template>

<script>
export default {
    props: ['notification'],

    computed: {
        comment() {
            return this.notification.comment;
        }
    }
}
</script>
