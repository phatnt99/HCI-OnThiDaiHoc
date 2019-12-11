import React, { Component, useState } from 'react';
import { View, Text, StyleSheet, FlatList, TouchableOpacity } from 'react-native';
import Icon from 'react-native-vector-icons/Ionicons';

function Item({ data, navigate }) {
    const [toggle, setToggle] = useState(false);

    return (
        <View style={styles.card}>
            <TouchableOpacity style={styles.card_mini}
                onPress={() => {
                    setToggle(!toggle);
                }}>
                <View style={{ flex: 1.5, justifyContent: 'center', alignItems: 'center' }}>
                    <Text style={styles.card_number}>{data.number}</Text>
                </View>
                <View style={{ flex: 7, flexDirection: 'row', flexWrap: 'wrap' }}>
                    <Text style={styles.card_title}>
                        {data.title}
                    </Text>
                </View>
                <View style={{ flex: 1.5, flexDirection: 'column', justifyContent: 'center', alignItems: 'center' }}>
                    <Icon name={toggle ? "ios-arrow-up" : "ios-arrow-down"} size={30} style={styles.card_expand} />
                    <Text style={styles.card_subtitle}>{data.subtitle} bài</Text>
                </View>
            </TouchableOpacity>
            {toggle && <View style={{ elevation: 5, backgroundColor: '#FFFFFF', paddingBottom: 20 }}>
                <FlatList
                    data={data.lesson}
                    renderItem={({ item }) =>
                        <TouchableOpacity
                            onPress={() => {
                                navigate('Document', { 'title': item.lesson_title });
                            }}>
                            <View style={styles.lesson_wrap}>
                                <Text style={{ color: "#C4C4C4", marginRight: 10, fontSize: 18 }}>{item.lesson_id}</Text>
                                <Text>{item.lesson_title}</Text>
                            </View>
                        </TouchableOpacity>}
                    keyExtractor={item => item.lesson_id}
                />
            </View>}
        </View>
    )
};

const DATA = [
    {
        id: '1',
        title: 'Ứng dụng đạo hàm để khảo sát và vẽ đồ thị của hàm số',
        number: 1,
        subtitle: 9,
        lesson: [

        ]
    },
    {
        id: '2',
        title: 'Mũ và logarit',
        number: 2,
        subtitle: 4,
        lesson: [
            {
                lesson_id: '2.1',
                lesson_title: 'Lũy thừa và hàm số lũy thừa'
            },
            {
                lesson_id: '2.2',
                lesson_title: 'Logarit'
            },
            {
                lesson_id: '2.3',
                lesson_title: 'Bất phương trình mũ và logarit'
            },
            {
                lesson_id: '2.4',
                lesson_title: 'Bài toán lãi suất ngân hàng'
            },
        ]
    },
    {
        id: '3',
        title: 'Nguyên hàm – tích phân ứng dụng tích phân',
        number: 3,
        subtitle: 9,
        lesson: [
            {
                lesson_id: '2.1',
                lesson_title: 'Lũy thừa và hàm số lũy thừa'
            }
        ]
    },
]

export default class Result extends Component {
    constructor(props) {
        super(props);
        this.state = {
        };
    }

    render() {
        return (
            <View style={styles.container}>
                <View style={styles.header}>
                    <View style={{ flexDirection: 'row' }}>
                        <View style={{ flex: 8 }}>
                            <Icon name="md-arrow-back" size={25} />
                            <Text style={styles.titleHeader}>TOÁN 12</Text>
                        </View>
                        <View>
                            <Icon name="md-school" size={70} color="#00817C" />
                        </View>
                    </View>
                    <View style={styles.menu}>
                        <View style={styles.titleMenu}><Text style={[styles.sub, styles.active]}>Lý thuyết</Text></View>
                        <View style={styles.titleMenu}><Text style={[styles.sub, styles.inactive]}>Bài tập</Text></View>
                        <View style={styles.titleMenu}><Text style={[styles.sub, styles.inactive]}>Mẹo</Text></View>
                    </View>
                </View>
                <View style={styles.container}>
                    <FlatList
                        scrollEnabled={true}
                        data={DATA}
                        renderItem={({ item }) => <Item data={item} navigate={this.props.navigation.navigate} />}
                        keyExtractor={item => item.id}
                    />
                </View>
            </View>
        );
    }
}


const styles = StyleSheet.create({
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