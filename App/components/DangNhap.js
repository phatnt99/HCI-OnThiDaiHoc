import React, { Component } from 'react';
import { View, Text, TextInput, TouchableOpacity, ImageBackground } from 'react-native';
import { Thumbnail } from 'native-base';
import Icon from 'react-native-vector-icons/FontAwesome';


export default class DangNhap extends Component {
    constructor(props) {
        super(props);
        this.state = {
            see: true,
            rem: false
        };
    }

    render() {
        return (
            <View style={{
                flex: 1
            }}>
                <View style={{
                    flex: 3,
                    justifyContent: 'center',
                    alignItems: 'center'
                }}>
                    <Thumbnail large source={require('../public/images/backpack.png')} />
                </View>
                <View style={{
                    flex: 7,
                    padding: 20
                }}>
                    <View
                        style={{
                            flexDirection: 'row',
                            padding: 10,
                            borderWidth: 1,
                            borderColor: '#a4a4a4',
                            borderRadius: 10,
                            alignItems: 'center'
                        }}>
                        <View style={{
                            flex: 1,
                            alignItems: 'center',
                            justifyContent: 'center'
                        }}>
                            <Icon name="user-circle" size={20} color="#00817C" style={{ marginRight: 10 }} />
                        </View>
                        <View style={{
                            flex: 9
                        }}>
                            <TextInput keyboardType="email-address" placeholder="Email đăng nhập" style={{ height: 20, padding: 0, margin: 0 }} />
                        </View>
                    </View>
                    <View
                        style={{
                            marginTop: 15,
                            flexDirection: 'row',
                            padding: 10,
                            borderWidth: 1,
                            borderColor: '#a4a4a4',
                            borderRadius: 10,
                            alignItems: 'center'
                        }}>
                        <View style={{
                            flex: 1,
                            alignItems: 'center',
                            justifyContent: 'center'
                        }}>
                            <Icon name="lock" size={20} color="#00817C" style={{ marginRight: 10 }} />
                        </View>
                        <View style={{
                            flex: 8,

                        }}>
                            <TextInput secureTextEntry={this.state.see} placeholder="Mật khẩu" style={{ height: 20, padding: 0, margin: 0 }} />
                        </View>
                        <TouchableOpacity
                            style={{
                                flex: 1,
                                justifyContent: 'center',
                                alignItems: 'center'
                            }}
                            onPress={() => {
                                this.setState({
                                    see: !this.state.see
                                })
                            }}>
                            <Icon name={this.state.see == true ? "eye-slash" : 'eye'} size={20} color="#00817C" />

                        </TouchableOpacity>
                    </View>
                    <View style={{
                        marginTop: 20,
                        flexDirection: 'row',
                        justifyContent: 'space-between',
                        alignItems: 'center'
                    }}>
                        <TouchableOpacity
                            style={{
                                flexDirection: 'row',
                                alignItems: 'center'
                            }}
                            onPress={() => {
                                this.setState({
                                    rem: !this.state.rem
                                })
                            }}>
                            <Icon name={this.state.rem == true ? "check-square-o" : 'square-o'} size={25} color="#00817C" style={{ marginRight: 10 }} />
                            <Text style={{ color: '#c4c4c4' }}>Nhớ mật khẩu</Text>
                        </TouchableOpacity>
                        <TouchableOpacity
                            onPress={() => {
                                this.props.navigation.navigate('DangKi');
                            }}>
                            <Text style={{ color: "#00817C" }}>Đăng ký tài khoản</Text>
                        </TouchableOpacity>
                    </View>
                    <View style={{
                        marginTop: 20,
                    }}>
                        <TouchableOpacity
                        onPress={() => {
                            this.props.navigation.navigate("Index")
                        }}
                            style={{
                                backgroundColor: '#00817C',
                                alignItems: 'center',
                                justifyContent: 'center',
                                padding: 10,
                                borderRadius: 10
                            }}>
                            <Text style={{ color: 'white' }}>Đăng nhập</Text>
                        </TouchableOpacity>
                    </View>
                    <View style={{
                        marginTop: 15,
                        flexDirection: 'row',
                        alignItems: 'center',
                    }}>
                        <View style={{
                            backgroundColor: '#c4c4c4',
                            height: 1,
                            flex: 4
                        }} />
                        <View style={{
                            //backgroundColor: 'green',
                            //alignItems: 'center',
                            //justifyContent: 'center'
                        }}><Text style={{
                            paddingHorizontal: 5
                            //fontSize: 14,
                            //height: 10
                            , color: '#a2a2a2'
                        }}>Hoặc</Text></View>
                        <View style={{
                            backgroundColor: '#c4c4c4',
                            height: 1,
                            flex: 4
                        }} />

                    </View>
                    <View style={{
                        marginTop: 15,
                    }}>
                        <TouchableOpacity
                            style={{
                                backgroundColor: '#122ae0',
                                alignItems: 'center',
                                justifyContent: 'center',
                                padding: 10,
                                borderRadius: 10
                            }}>
                            <Text style={{ color: 'white' }}>Đăng nhập với Facebook</Text>
                        </TouchableOpacity>
                    </View>
                    <View style={{
                        marginTop: 15,
                    }}>
                        <TouchableOpacity
                            style={{
                                backgroundColor: '#d41313',
                                alignItems: 'center',
                                justifyContent: 'center',
                                padding: 10,
                                borderRadius: 10
                            }}>
                            <Text style={{ color: 'white' }}>Đăng nhập với Google</Text>
                        </TouchableOpacity>
                    </View>
                </View>
            </View>
        );
    }
}
