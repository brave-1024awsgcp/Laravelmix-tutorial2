new Vue({
    el: '#app',
    data: {
        firstName: '',
        lastName: '',
        email: '',
        subjectId: '',
        body: '',
        subjects: {
            100: '商品に関するご質問',
            200: 'お支払に関するご質問',
            300: 'ショッピングに関するご質問',
            400: 'ポイントに関するご質問',
            500: 'ご質問・その他',
        }
    }
});