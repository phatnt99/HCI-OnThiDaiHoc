import React, { Component } from 'react';
import { View, Text, Dimensions, TextInput, Image, FlatList, TouchableOpacity, ScrollView } from 'react-native';
import { Thumbnail, Container, Header, Content, Item, Input } from 'native-base';
import Icon from 'react-native-vector-icons/Ionicons';
import { someAnh } from '../dataset/dataMonHoc';
export default class DangBai extends Component {
    constructor(props) {
        super(props);
        this.state = {
            numOfLinesCompany: 0
        };
    }

    render() {
        return (
            <View style={{
                flex: 1,
            }}>
                <View style={{
                    flex: 1,
                }}>
                    <View style={{
                        flexDirection: 'row',
                        paddingTop: 10,
                        paddingLeft: 15,
                        paddingRight: 15,
                        paddingBottom: 10,
                        alignItems: 'center',
                        justifyContent: 'space-between',
                    }}>
                        <View style={{
                            flexDirection: 'row',
                            alignItems: 'center',

                        }}>
                            <TouchableOpacity
                                onPress={() => {
                                    this.props.navigation.goBack();
                                }}>
                                <Icon name="md-arrow-back" size={25} />
                            </TouchableOpacity>
                            <Thumbnail
                                style={{
                                    width: 30,
                                    height: 30,
                                    marginLeft: 15
                                }}
                                source={{ uri: 'https://data.whicdn.com/images/333604972/original.jpg' }} />
                            <View style={{
                                marginLeft: 5
                            }}>
                                <Text>Phat Nguyen</Text>
                                <Text style={{
                                    fontSize: 10,
                                    color: '#a4a4a4'
                                }}>phatnguyen2499@gmail.com</Text>
                            </View>
                        </View>
                        <TouchableOpacity>
                            <Text style={{
                                color: '#00817C'
                            }}>Đăng bài</Text>
                        </TouchableOpacity>
                    </View>
                </View>
                <View style={{
                    flex: 6,
                    padding: 15
                }}>
                    <TextInput
                        multiline={true}
                        numberOfLines={this.state.numOfLinesCompany}
                        onContentSizeChange={(e) => {
                            this.state.numOfLinesCompany = e.nativeEvent.contentSize.height / 18;
                        }}
                        placeholder="Viết câu hỏi của bạn..."
                    />
                </View>
                <View style={{
                    flex: 3,
                    padding: 15
                }}>
                    <View style={{
                        flexDirection: 'row',
                        alignItems: 'center',

                    }}>
                        <Icon name="md-camera" size={25} color="#00817C" />
                        <Text style={{
                            marginLeft: 5,
                            fontWeight: 'bold'
                        }}>Đính kèm hình ảnh</Text>
                    </View>
                    <FlatList
                        scrollEnabled={true}
                        horizontal
                        data={someAnh}
                        renderItem={({ item }) => <TouchableOpacity style={[{
                            margin: 5,
                            width: 70,
                            height: 70,
                            borderRadius: 10
                        }, item.id == '4' ? { borderWidth: 1, borderStyle: 'dashed', borderColor: item.color, alignItems: 'center', justifyContent: 'center' } : { backgroundColor: item.color }]} >
                            {item.id == '4' &&
                                <Text style={{ textAlign: 'center' }}>+</Text>
                            }
                        </TouchableOpacity>}
                        keyExtractor={item => item.id}
                    />
                </View>
            </View>


        );
    }
}
