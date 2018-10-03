import store from './vuex/store'
import swall from 'sweetalert'

const typesNotifications = {
    postCommented: 'App\\Notifications\\PostCommented',
}

if (Laravel.user) {
    Echo.private(`App.Models.User.${Laravel.user}`)
            .notification(notification => {
                if (Laravel.user == notification.data.comment.post.user.id) {
                    if(notification.type == typesNotifications.postCommented) {
                        swall(
                            'Novo Comentário',
                            `O post ${notification.data.comment.post.title} foi comentado por ${notification.data.comment.user.name}`,
                            'info'
                        )

                        store.commit('ADD_NOTIFICATION', notification)
                    }
                }
            })
}
