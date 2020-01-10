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
                            <TextInput keyboardType="email-address" placeholder="Email đăng ký" style={{ height: 20, padding: 0, margin: 0 }} />
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
                    }}>
                        <TouchableOpacity
                            style={{
                                backgroundColor: '#00817C',
                                alignItems: 'center',
                                justifyContent: 'center',
                                padding: 10,
                                borderRadius: 10
                            }}>
                            <Text style={{ color: 'white' }}>Đăng ký</Text>
                        </TouchableOpacity>
                    </View>
                    
                </View>
            </View>
        );
    }
}
