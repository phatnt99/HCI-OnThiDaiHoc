import React, { Component } from 'react';
import { View, Text, Dimensions, TextInput, TouchableOpacity, StyleSheet, FlatList } from 'react-native';
import Icon from 'react-native-vector-icons/Ionicons';
import { DeThi } from '../dataset/dataMonHoc';

function Item({ data, f5, navigate }) {
    return (
        <View style={styles.card}>
            <TouchableOpacity style={styles.card_mini}
                onPress={() => {
                    console.log('Vô chưa');
                    navigate('ChiTietDe', { 'data': data, 'f5': f5 });
                }}>
                <View>
                    <Text style={{ lineHeight: 20 }}>{data.title}</Text>
                </View>
                <View style={{ flexDirection: 'row', justifyContent: 'space-between', alignItems: 'center', marginTop: 5 }}>
                    <View style={{ flexDirection: 'row', alignItems: 'center' }}>
                        <Icon name="md-person" size={21} color="#00817C" />
                        <Text style={{ marginLeft: 5, color: '#C4C4C4' }}>{data.analys}</Text>
                    </View>
                    <View>
                        <Icon name={data.star ? "md-star" : null} size={25} color="#00817C" />
                    </View>
                </View>
            </TouchableOpacity>
        </View>
    )
};

export default class TimKiemDeThi extends Component {
    constructor(props) {
        super(props);
        this.state = {
            refesh: false
        };
    }

    refreshs = () => {
        this.setState({ refesh: !this.state.refesh })
    }

    render() {
        return (
            <View style={{ flex: 1 }}>
                <View style={{
                    flexDirection: 'row',
                    paddingTop: 10,
                    paddingLeft: 15,
                    paddingRight: 15,
                    paddingBottom: 10,
                    alignItems: 'center'
                }}>
                    <TouchableOpacity
                        onPress={() => {
                            this.props.navigation.goBack();
                        }}>
                        <Icon name="md-arrow-back" size={25} />
                    </TouchableOpacity>
                    <TextInput
                        //multiline={true}
                        //numberOfLines={10}
                        onChangeText={(text) => {
                            this.setState({ text })
                        }}
                        style={{
                            marginLeft: 25,
                            height: 40
                        }}
                        textAlignVertical='top'
                        placeholder="Tìm kiếm đề thi..."
                    />
                </View>
                <View>
                    <FlatList
                        scrollEnabled={true}
                        data={DeThi}
                        renderItem={({ item, index }) => <Item data={item} f5={this.refreshs} navigate={this.props.navigation.navigate} />}
                        keyExtractor={item => item.id}
                        extraData={this.state.refesh}
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
        paddingLeft: 15,
        paddingRight: 15,
        marginTop: 10
        //paddingTop: 10,
        //paddingBottom: 10

    },
    titleHeader: {
        //marginTop: 17,
        fontWeight: 'bold',
        fontSize: 23
    },
    menu: {
        marginTop: 20,
        flexDirection: 'row',
        justifyContent: 'space-around'
    },
    titleMenu: {
        //flex: 1,
        //alignItems: 'center',
    },
    sub: {
        fontSize: 20,
        color: "#C4C4C4"
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
        elevation: 3,
        backgroundColor: '#FFFFFF',
        //flexDirection: 'row',
        //alignItems: 'center',
        padding: 10
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
