import React, { Component, useState } from 'react';
import { View, Text, StyleSheet, FlatList, TouchableOpacity, Image } from 'react-native';
import Icon from 'react-native-vector-icons/Ionicons';

import { Button, Header, Left, Right, Body, Title, Container, Content, Thumbnail } from 'native-base';
import { DeThi as DATA } from '../dataset/dataMonHoc';

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
                        {data.star && <Icon name={data.star ? "md-star" : null} size={25} color="#00817C" />}
                    </View>
                </View>
            </TouchableOpacity>
        </View>
    )
};


export default class DeThi extends Component {
    constructor(props) {
        super(props);
        this.state = {
            menu: 1,
            DeThi: DATA,
            refesh: false
        };
    }

    refreshs = () => {
        this.setState({ refesh: !this.state.refesh })
    }
    renderMenu = () => {
        switch (this.state.menu) {
            case 1:
                return (
                    <FlatList
                        scrollEnabled={true}
                        data={this.state.DeThi}
                        renderItem={({ item, index }) => <Item data={item} f5={this.refreshs} navigate={this.props.navigation.navigate} />}
                        keyExtractor={item => item.id}
                        extraData={this.state.refesh}
                    />
                );
            case 2:
                return (
                    <FlatList
                        scrollEnabled={true}
                        data={this.state.DeThi}
                        renderItem={({ item, index }) => <Item data={item} f5={this.refreshs} navigate={this.props.navigation.navigate} />}
                        keyExtractor={item => item.id}
                        extraData={this.state.refesh}
                    />
                );
            case 3:
                return (
                    <FlatList
                        scrollEnabled={true}
                        data={this.state.DeThi}
                        renderItem={({ item, index }) => <Item data={item} f5={this.refreshs} navigate={this.props.navigation.navigate} />}
                        keyExtractor={item => item.id}
                        extraData={this.state.refesh}
                    />
                )
            default:
                break;
        }
    }

    render() {
        return (
            <Container>
                <View style={styles.header}>
                    <View style={{ flexDirection: 'row' }}>
                        <View style={{ flex: 8 }}>
                            <TouchableOpacity
                                onPress={() => {
                                    this.props.navigation.goBack(null);
                                }}>
                                <Icon name="md-arrow-back" size={25} />
                            </TouchableOpacity>
                            <Text style={styles.titleHeader}>{this.props.navigation.state.params.mon}</Text>
                        </View>
                        <View>
                            <Image source={require('../public/images/dethi.png')} style={{
                                width: 100,
                                height: 100
                            }} />
                        </View>
                    </View>
                    <View style={styles.menu}>
                        <TouchableOpacity
                            onPress={() => { this.setState({ menu: 1 }) }} style={styles.titleMenu}><Text style={[styles.sub, this.state.menu == 1 ? styles.active : '']}>Tất cả</Text></TouchableOpacity>
                        <TouchableOpacity
                            onPress={() => { this.setState({ menu: 2 }) }} style={styles.titleMenu}><Text style={[styles.sub, this.state.menu == 2 ? styles.active : '']}>Xem nhiều</Text></TouchableOpacity>
                        <TouchableOpacity
                            onPress={() => { this.setState({ menu: 3 }) }} style={styles.titleMenu}><Text style={[styles.sub, this.state.menu == 3 ? styles.active : '']}>Đề mới</Text></TouchableOpacity>
                    </View>
                </View>
                <View style={styles.container}>
                    {this.renderMenu()}
                </View>
            </Container>
        );
    }
}
//export default withNavigation(DeThi);


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
        marginTop: 10,
        fontWeight: 'bold',
        fontSize: 23
    },
    menu: {
        //marginTop: 20,
        marginBottom: 10,
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