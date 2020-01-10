import React, { Component } from 'react';
import { View, Button, TouchableOpacity, TouchableHighlight } from 'react-native';
import Icon from 'react-native-vector-icons/Ionicons';
import styles from './styles';
import { Text, Thumbnail } from 'native-base';


export default class ChiTietDe extends Component {
    constructor(props) {
        super(props);
        this.state = {
            mark: this.props.navigation.state.params.data.star
        };
    }

    render() {
        return (
            <View style={{ flex: 1, padding: 15 }}>
                <View>
                    <View style={{ flexDirection: 'row' }}>
                        <TouchableOpacity style={{ flex: 6 }}
                            onPress={() => {
                                this.props.navigation.goBack();
                            }}>

                            <Icon name="md-arrow-back" size={25} />
                        </TouchableOpacity>
                        <View style={{ flex: 4, flexDirection: 'row-reverse', alignItems: 'center' }}>

                            <Icon name="md-download" size={25} color="#00817C" />
                            <TouchableOpacity
                            onPress={() => {
                                this.props.navigation.navigate('Document',{ 'title': this.props.navigation.state.params.data.title });
                            }}>
                                <Icon name="md-document" size={25} color="#00817C" style={{ marginRight: 25 }} />
                            </TouchableOpacity>
                            <TouchableOpacity
                                onPress={() => {
                                    this.setState({ mark: !this.state.mark });
                                    this.props.navigation.state.params.data.star = !this.props.navigation.state.params.data.star;
                                    this.props.navigation.state.params.f5();
                                }}>
                                <Icon name={this.state.mark ? "md-star" : "md-star-outline"} size={30} color="#00817C" style={{ marginRight: 25 }} />
                            </TouchableOpacity>
                        </View>
                    </View>
                    <View>
                        <Text style={{
                            marginTop: 10,
                            fontWeight: 'bold',
                            fontSize: 19
                        }}>{this.props.navigation.state.params.data.title}</Text>

                    </View>
                </View>
                <View>
                    <View >
                        <View style={{ flexDirection: 'row', justifyContent: 'space-between', marginTop: 20 }}>
                            <View style={{ flexDirection: 'row', alignItems: 'center' }}>
                                <Icon name="md-time" style={{ color: "#00817C", }} size={20} />
                                <Text style={{ marginLeft: 5, color: "#00817C" }}>Thời gian</Text>
                            </View>
                            <View>
                                <Text>{this.props.navigation.state.params.data.time}</Text>
                            </View>
                        </View>
                        <View style={{ flexDirection: 'row', justifyContent: 'space-between', marginTop: 20 }}>
                            <View style={{ flexDirection: 'row', alignItems: 'center' }}>
                                <Icon name="md-calendar" style={{ color: "#00817C" }} size={20} />
                                <Text style={{ marginLeft: 5, color: "#00817C" }}>Ngày tạo</Text>
                            </View>
                            <View>
                                <Text>{this.props.navigation.state.params.data.date}</Text>
                            </View>
                        </View>
                        <View style={{ flexDirection: 'row', justifyContent: 'space-between', marginTop: 20 }}>
                            <View style={{ flexDirection: 'row', alignItems: 'center' }}>
                                <Icon name="md-bookmarks" style={{ color: "#00817C" }} size={20} />
                                <Text style={{ marginLeft: 5, color: "#00817C" }}>Môn</Text>
                            </View>
                            <View>
                                <Text>{this.props.navigation.state.params.data.mon}</Text>
                            </View>
                        </View>
                        <View style={{ flexDirection: 'row', justifyContent: 'space-between', marginTop: 20 }}>
                            <View style={{ flexDirection: 'row', alignItems: 'center' }}>
                                <Icon name="md-clipboard" style={{ color: "#00817C" }} size={20} />
                                <Text style={{ marginLeft: 5, color: "#00817C" }}>Số câu hỏi</Text>
                            </View>
                            <View>
                                <Text>{this.props.navigation.state.params.data.soCauHoi}</Text>
                            </View>
                        </View>
                        <View style={{ flexDirection: 'row', justifyContent: 'space-between', marginTop: 20 }}>
                            <View style={{ flexDirection: 'row', alignItems: 'center' }}>
                                <Icon name="md-person" style={{ color: "#00817C" }} size={20} />
                                <Text style={{ marginLeft: 5, color: "#00817C" }}>Số lượt thi</Text>
                            </View>
                            <View>
                                <Text>{this.props.navigation.state.params.data.soNguoi}</Text>
                            </View>
                        </View>
                    </View>
                    <View style={{ marginTop: 20, alignItems: 'center', justifyContent: 'center' }}>
                        <View style={{ flexDirection: 'row', alignItems: 'center', justifyContent: 'center' }}>
                            <Icon name="md-podium" style={{ color: "#00817C" }} size={20} />
                            <Text style={{ marginLeft: 5, color: "#00817C" }}>Xếp hạng</Text>
                        </View>
                    </View>
                    <View style={{ flexDirection: 'row', justifyContent: 'space-between', marginTop: 15, padding: 5, borderRadius: 10, backgroundColor: '#f4f8fb' }}>
                        <View style={{ flexDirection: 'column', justifyContent: 'center', alignItems: 'center' }}>
                            <Thumbnail small source={{ uri: 'https://data.whicdn.com/images/333604972/original.jpg' }} />
                            <Text style={{ fontSize: 13 }}>Nguyễn A</Text>
                            <Text style={{ fontSize: 10 }}><Text style={{
                                color: 'red'
                            }}>20</Text>/20</Text>
                        </View>
                        <View style={{ flexDirection: 'column', justifyContent: 'center', alignItems: 'center' }}>
                            <Thumbnail small source={{ uri: 'https://data.whicdn.com/images/333604972/original.jpg' }} />
                            <Text style={{ fontSize: 13 }}>Nguyễn A</Text>
                            <Text style={{ fontSize: 10 }}><Text style={{
                                color: 'red'
                            }}>20</Text>/20</Text>
                        </View>
                        <View style={{ flexDirection: 'column', justifyContent: 'center', alignItems: 'center' }}>
                            <Thumbnail small source={{ uri: 'https://data.whicdn.com/images/333604972/original.jpg' }} />
                            <Text style={{ fontSize: 13 }}>Nguyễn A</Text>
                            <Text style={{ fontSize: 10 }}><Text style={{
                                color: 'red'
                            }}>18</Text>/20</Text>
                        </View>
                        <View style={{ flexDirection: 'column', justifyContent: 'center', alignItems: 'center' }}>
                            <Thumbnail small source={{ uri: 'https://data.whicdn.com/images/333604972/original.jpg' }} />
                            <Text style={{ fontSize: 13 }}>Phat Nguyen</Text>
                            <Text style={{ fontSize: 10 }}><Text style={{
                                color: 'red'
                            }}>18</Text>/20</Text>
                        </View>
                    </View>
                </View>
                <TouchableOpacity style={{ position: 'absolute', bottom: 20, left: 15, right: 15, }}
                    onPress={() => {
                        this.props.navigation.navigate('ChiTietCauHoi', this.props.navigation.state.params.data);
                    }}>
                    <View style={{ padding: 15, backgroundColor: '#00817C', elevation: 3, alignItems: 'center', justifyContent: 'center' }}>
                        <Text style={{ color: 'white', textAlign: 'center' }}>LÀM ĐỀ THI</Text>
                    </View>
                </TouchableOpacity>
            </View>
        );
    }
}



