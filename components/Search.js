import React, { Component } from 'react';
import { View, Text, Dimensions, TextInput, TouchableOpacity, StyleSheet } from 'react-native';
import Icon from 'react-native-vector-icons/Ionicons';
import { withNavigation } from 'react-navigation';
import { arrMonHoc, arrKhoi } from '../dataset/dataMonHoc';

class Search extends Component {
    constructor(props) {
        super(props);
        this.state = {
            loai: null,
            mon: null,
            khoi: null,
            beingSearch: false,
            text: null,
            height: 0
        }
    }

    render() {
        //console.log('có data hay ko = ', arrMonHoc);
        return (
            <View style={{ flex: 1 }}>
                <View style={{
                    width: Dimensions.get('window').width - 30,
                    alignSelf: 'center',
                    flexDirection: 'row',
                    alignItems: 'center',
                    justifyContent: 'space-between',
                    marginTop: 15,
                    backgroundColor: '#FFFFFF',
                    flexWrap: 'wrap'
                }}>
                    <View>
                        <Text style={{ fontSize: 20, fontWeight: 'bold' }}>Khám phá</Text>
                    </View>
                    <TouchableOpacity
                    onPress={() => {
                        this.props.navigation.navigate('TimKiemDeThi');
                    }}>
                        <Icon name="md-search" size={25} color="#00817C"/>
                    </TouchableOpacity>
                </View>
                <View style={{ padding: 20 }}>

                    <View style={styles.section}>
                        <View style={{ flex: 2 }}><Text>Loại</Text></View>
                        <View style={{ flexDirection: 'row', flex: 8, justifyContent: 'space-between' }}>
                            <TouchableOpacity
                                style={this.state.loai == 1 ? styles.btnActive : styles.button}
                                onPress={() => {
                                    this.setState({
                                        loai: 1
                                    })
                                }}>
                                <Text style={this.state.loai == 1 ? styles.btnTitleActive : styles.titleButton}>Lí thuyết</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={this.state.loai == 2 ? styles.btnActive : styles.button}
                                onPress={() => {
                                    this.setState({
                                        loai: 2
                                    })
                                }}>
                                <Text style={this.state.loai == 2 ? styles.btnTitleActive : styles.titleButton}>Đề thi</Text>
                            </TouchableOpacity>
                        </View>
                    </View>

                    <View style={styles.section}>
                        <View style={{ flex: 2 }}><Text>Môn</Text></View>
                        <View style={{ flexDirection: 'row', flex: 8, justifyContent: 'space-between', flexWrap: 'wrap' }}>
                            <TouchableOpacity
                                style={this.state.mon == 1 ? styles.btnActive : styles.button}
                                onPress={() => {
                                    this.setState({
                                        mon: 1
                                    })
                                }}>
                                <Text style={this.state.mon == 1 ? styles.btnTitleActive : styles.titleButton}>Toán</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={this.state.mon == 2 ? styles.btnActive : styles.button}
                                onPress={() => {
                                    this.setState({
                                        mon: 2
                                    })
                                }}>
                                <Text style={this.state.mon == 2 ? styles.btnTitleActive : styles.titleButton}>Lý</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={this.state.mon == 3 ? styles.btnActive : styles.button}
                                onPress={() => {
                                    this.setState({
                                        mon: 3
                                    })
                                }}>
                                <Text style={this.state.mon == 3 ? styles.btnTitleActive : styles.titleButton}>Hóa</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={this.state.mon == 4 ? styles.btnActive : styles.button}
                                onPress={() => {
                                    this.setState({
                                        mon: 4
                                    })
                                }}>
                                <Text style={this.state.mon == 4 ? styles.btnTitleActive : styles.titleButton}>Sinh</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={this.state.mon == 5 ? styles.btnActive : styles.button}
                                onPress={() => {
                                    this.setState({
                                        mon: 5
                                    })
                                }}>
                                <Text style={this.state.mon == 5 ? styles.btnTitleActive : styles.titleButton}>Sử</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={this.state.mon == 6 ? styles.btnActive : styles.button}
                                onPress={() => {
                                    this.setState({
                                        mon: 6
                                    })
                                }}>
                                <Text style={this.state.mon == 6 ? styles.btnTitleActive : styles.titleButton}>Địa</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={this.state.mon == 7 ? styles.btnActive : styles.button}
                                onPress={() => {
                                    this.setState({
                                        mon: 7
                                    })
                                }}>
                                <Text style={this.state.mon == 7 ? styles.btnTitleActive : styles.titleButton}
                                >Anh văn</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={this.state.mon == 8 ? styles.btnActive : styles.button}
                                onPress={() => {
                                    this.setState({
                                        mon: 8
                                    })
                                }}>
                                <Text style={this.state.mon == 8 ? styles.btnTitleActive : styles.titleButton}
                                >Ngữ Văn</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={this.state.mon == 9 ? styles.btnActive : styles.button} onPress={() => {
                                    this.setState({
                                        mon: 9
                                    })
                                }}>
                                <Text style={this.state.mon == 9 ? styles.btnTitleActive : styles.titleButton}>GDCD</Text>
                            </TouchableOpacity>
                        </View>
                    </View>

                    {this.state.loai != 2 && <View style={styles.section}>
                        <View style={{ flex: 2 }}><Text>Khối</Text></View>
                        <View style={{ flexDirection: 'row', flex: 8, justifyContent: 'space-between', flexWrap: 'wrap' }}>
                            <TouchableOpacity
                                style={this.state.khoi == 1 ? styles.btnActive : styles.button}
                                onPress={() => {
                                    this.setState({
                                        khoi: 1
                                    })
                                }}>
                                <Text style={this.state.khoi == 1 ? styles.btnTitleActive : styles.titleButton}>10</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={this.state.khoi == 2 ? styles.btnActive : styles.button}
                                onPress={() => {
                                    this.setState({
                                        khoi: 2
                                    })
                                }}>
                                <Text style={this.state.khoi == 2 ? styles.btnTitleActive : styles.titleButton}>11</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={this.state.khoi == 3 ? styles.btnActive : styles.button}
                                onPress={() => {
                                    this.setState({
                                        khoi: 3
                                    })
                                }}>
                                <Text style={this.state.khoi == 3 ? styles.btnTitleActive : styles.titleButton}>12</Text>
                            </TouchableOpacity>
                        </View>
                    </View>}

                </View>
                <View style={{ flexDirection: 'row-reverse', bottom: 10, right: 20, position: "absolute", }}>
                    <TouchableOpacity style={styles.next}
                        onPress={() => {
                            if (this.state.loai == 1)
                                this.props.navigation.navigate('LyThuyet', { mon: arrMonHoc[this.state.mon - 1], khoi: arrKhoi[this.state.khoi - 1] });
                            else
                                this.props.navigation.navigate('DeThi', { mon: arrMonHoc[this.state.mon - 1], khoi: arrKhoi[this.state.khoi - 1] });
                        }}>
                        <Icon name="md-arrow-round-forward" size={20} color="#FFFFFF" />
                    </TouchableOpacity>
                </View>
            </View>
        );
    }
}

export default withNavigation(Search);

const styles = StyleSheet.create({
    section: {
        flexDirection: 'row',
        marginTop: 30,
    },
    button: {
        width: 80,
        height: 30,
        padding: 4,
        elevation: 4,
        alignItems: 'center',
        justifyContent: 'center',
        backgroundColor: '#FFFFFF',
        marginBottom: 10
    },
    next: {
        width: 80,
        height: 30,
        padding: 4,
        elevation: 4,
        alignItems: 'center',
        justifyContent: 'center',
        backgroundColor: '#00817C',
        marginBottom: 10
    },
    titleButton: {
        color: '#00817C',
    },
    btnActive: {
        width: 80,
        height: 30,
        padding: 4,
        elevation: 4,
        alignItems: 'center',
        justifyContent: 'center',
        backgroundColor: '#00817C',
        marginBottom: 10
    },
    btnTitleActive: {
        color: 'white'
    }
});

