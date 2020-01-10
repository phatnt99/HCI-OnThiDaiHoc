import React, { Component, useState } from 'react';
import { View, Text, StyleSheet, FlatList, TouchableOpacity, Image } from 'react-native';
import Icon from 'react-native-vector-icons/Ionicons';
import { LyThuyet as DATA } from '../dataset/dataMonHoc';
function Item({ data, index, navigate, toggle, setToggle, flag2, setFlag }) {
    return (
        <View style={styles.card}>
            <TouchableOpacity style={styles.card_mini}
                onPress={() => {
                    setToggle(data.id);
                    setFlag(index, !flag2[index]);
                }}>
                <View style={{ flex: 1.5, justifyContent: 'center', alignItems: 'center' }}>
                    <Text style={styles.card_number}>{data.id}</Text>
                </View>
                <View style={{ flex: 7, flexDirection: 'row', flexWrap: 'wrap' }}>
                    <Text style={styles.card_title}>
                        {data.name}
                    </Text>
                </View>
                <View style={{ flex: 1.5, flexDirection: 'column', justifyContent: 'center', alignItems: 'center' }}>
                    <Icon name={flag2[index] == true ? "ios-arrow-up" : "ios-arrow-down"} size={30} style={styles.card_expand} />
                    <Text style={styles.card_subtitle}>{data.lesson.length} bài</Text>
                </View>
            </TouchableOpacity>
            {toggle == data.id && flag2[index] == true && <View style={{ elevation: 3, backgroundColor: '#FFFFFF', paddingBottom: 20 }}>
                <FlatList
                    data={data.lesson}
                    renderItem={({ item }) =>
                        <TouchableOpacity
                            onPress={() => {
                                navigate('Document', { 'title': item.name });
                            }}>
                            <View style={{
                                flexWrap: 'wrap',
                                flexDirection: 'row',
                                alignItems: 'center',
                                marginTop: 20,
                                marginLeft: 20,
                                marginRight: 20
                            }}>
                                <View style={{
                                    flex: 1.5
                                }} >
                                    <Text style={{ color: "#C4C4C4", marginRight: 10, fontSize: 18 }}>{item.id}</Text>
                                </View>
                                <View style={{
                                    flex: 8.5,
                                    flexDirection: 'row',
                                    flexWrap: 'wrap'
                                }}>
                                    <Text>{item.name}</Text>
                                </View>
                            </View>
                        </TouchableOpacity>}
                    keyExtractor={item => item.id}
                />
            </View>}
        </View>
    )
};


export default class LyThuyet extends Component {
    constructor(props) {
        super(props);
        this.state = {
            toggle: null, // cờ 1,
            menu: 1
        };
        this.flags2 = new Array(8);
        this.setFlag(-1, false);
    }


    setToggle = (toggle) => {
        this.setState({
            toggle: toggle
        })
    }

    setFlag = (index, value) => {
        if (index == -1) {
            for (let i = 0; i < this.flags2.length; i++) {
                this.flags2[i] = false;
            }
        }
        else {
            for (let i = 0; i < this.flags2.length; i++) {
                if (i == index) {
                    this.flags2[i] = value;
                }
                else {
                    value == false ? '' : this.flags2[i] = !value;
                }
            }
        }
    }

    renderMenu = () => {
        switch (this.state.menu) {
            case 1:
                return (
                    <FlatList
                        scrollEnabled={true}
                        data={DATA}
                        renderItem={({ item, index }) => <Item data={item} index={index} navigate={this.props.navigation.navigate} toggle={this.state.toggle} setToggle={this.setToggle} flag2={this.flags2} setFlag={this.setFlag} />}
                        keyExtractor={item => item.id}
                    />
                );
            case 2:
                return (
                    <FlatList
                        scrollEnabled={true}
                        data={DATA}
                        renderItem={({ item, index }) => <Item data={item} index={index} navigate={this.props.navigation.navigate} toggle={this.state.toggle} setToggle={this.setToggle} flag2={this.flags2} setFlag={this.setFlag} />}
                        keyExtractor={item => item.id}
                    />
                );
            case 3:
                return (
                    <FlatList
                        scrollEnabled={true}
                        data={DATA}
                        renderItem={({ item, index }) => <Item data={item} index={index} navigate={this.props.navigation.navigate} toggle={this.state.toggle} setToggle={this.setToggle} flag2={this.flags2} setFlag={this.setFlag} />}
                        keyExtractor={item => item.id}
                    />
                )
            default:
                break;
        }
    }

    render() {
        return (
            <View style={styles.container}>
                <View style={styles.header}>
                    <View style={{ flexDirection: 'row' }}>
                        <View style={{ flex: 8 }}>
                            <TouchableOpacity
                                style={{ marginBottom: 10 }}
                                onPress={() => {
                                    this.props.navigation.goBack();
                                }}>
                                <Icon name="md-arrow-back" size={25} />
                            </TouchableOpacity>
                            <Text style={styles.titleHeader}>{this.props.navigation.state.params.mon} {this.props.navigation.state.params.khoi}</Text>
                        </View>
                        <View>
                            <Image source={require('../public/images/study.png')} style={{
                                width: 100,
                                height: 100
                            }} />
                        </View>
                    </View>
                    <View style={styles.menu}>
                        <TouchableOpacity
                            onPress={() => { this.setState({ menu: 1 }) }} style={styles.titleMenu}><Text style={[styles.sub, this.state.menu == 1 ? styles.active : '']}>Lý thuyết</Text></TouchableOpacity>
                        <TouchableOpacity
                            onPress={() => { this.setState({ menu: 2 }) }} style={styles.titleMenu}><Text style={[styles.sub, this.state.menu == 2 ? styles.active : '']}>Bài tập</Text></TouchableOpacity>
                        <TouchableOpacity
                            onPress={() => { this.setState({ menu: 3 }) }} style={styles.titleMenu}><Text style={[styles.sub, this.state.menu == 3 ? styles.active : '']}>Mẹo</Text></TouchableOpacity>
                    </View>
                </View>
                <View style={styles.container}>
                    {this.renderMenu()}
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
    },
    titleHeader: {
        //marginTop: 17,
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
        flexWrap: 'wrap',
        flexDirection: 'row',
        alignItems: 'center',
        marginTop: 20,
        marginLeft: 20,
        marginRight: 20
    }
})