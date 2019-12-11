import {StyleSheet} from 'react-native';

export default styles = StyleSheet.create({
    container: {
        flex: 1
    },
    header: {
        padding: 15
    },
    titleHeader: {
        marginTop: 17,
        fontWeight: 'bold',
        fontSize: 23
    },
    menu: {
        marginTop: 33,
        flexDirection: 'row',
        justifyContent: 'space-around'
    }
    ,viewAnalys:{
        marginTop: 20,
        flexDirection: 'row-reverse',
    },
    titleMenu: {
        //flex: 1,
        //alignItems: 'center',
    },
    sub: {
        fontSize: 20
    },
    active: {
        fontWeight: 'bold',
        color: '#00817C'
    },
    inactive: {
        color: '#C4C4C4'
    },
    card: {
        marginTop: 10,
        marginBottom: 10,
        marginLeft: 15,
        marginRight: 15,
        //padding: 3,
    },
    card_mini: {
        elevation: 5,
        backgroundColor: '#FFFFFF',
        flexDirection: 'row',
        alignItems: 'center',
    },
    card_number: {
        color: "#C4C4C4",
        fontSize: 41
    },
    card_title: {
        color: '#00817C',
        fontSize: 16, fontWeight: '700'
    },
    card_expand: {
        color: '#00817C'
    },
    card_subtitle: {
        color: "#C4C4C4"
    },
    lesson_wrap: {
        flexDirection: 'row',
        alignItems: 'center',
        marginTop: 20,
        marginLeft: 20,
        marginRight: 20
    }
})