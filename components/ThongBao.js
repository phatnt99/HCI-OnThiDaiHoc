import React, { Component } from 'react';
import {
    View,
    StatusBar,
    TouchableOpacity, Text
} from 'react-native';
import { Body, Left, Right, Thumbnail, List, ListItem } from 'native-base';
import Icon from 'react-native-vector-icons/Ionicons';
import { DeThi } from '../dataset/dataMonHoc';
export default class ThongBao extends Component {
    constructor(props) {
        super(props);
        this.state = {
        };
    }

    render() {
        return (
            <View style={{
                flex: 1, backgroundColor: 'white',
            }}>
                <View style={{
                    flexDirection: 'row',
                    justifyContent: 'space-between',
                    alignItems: 'center',
                    paddingTop: 15,
                    paddingLeft: 15,
                    paddingRight: 15,
                    paddingBottom: 15
                }}>
                    <Text style={{ fontSize: 20, fontWeight: 'bold' }}>Thông báo</Text>
                    <TouchableOpacity><Icon name="md-trash" color="#00817C" size={25} /></TouchableOpacity>
                </View>
                <List style={{ marginTop: 10 }}>
                    <ListItem avatar style={{ marginLeft: 0, backgroundColor: '#f4f4f4',paddingLeft: 15 }}
                        onPress={() => {
                            this.props.navigation.navigate('ChiTietDe', { 'data': DeThi[0] });
                        }}>
                        <Left>
                            <Thumbnail small square source={require('../public/images/noti1.png')} />
                        </Left>
                        <Body>
                            <Text style={{ fontWeight: 'bold' }}>Đề thi thử THPT QG 2020 môn Toán lần 1 trường chuyên Lê Quý Đôn – Điện Biên</Text>
                            <Text style={{ fontSize: 13, color: '#a7a7a7' }}>Vào làm bài ngay nào!</Text>
                        </Body>
                        <Right />
                    </ListItem>
                    <ListItem avatar style={{ marginLeft: 0, backgroundColor: '#f4f4f4' ,paddingLeft: 15}}
                        onPress={() => {
                            this.props.navigation.navigate('ChiTietDe', { 'data': DeThi[0] });
                        }}>
                        <Left>
                            <Thumbnail small square source={require('../public/images/noti1.png')} />
                        </Left>
                        <Body>
                            <Text style={{ fontWeight: 'bold' }}>Đề thi thử THPT QG 2020 môn Toán lần 1 trường chuyên Lê Quý Đôn – Điện Biên</Text>
                            <Text style={{ fontSize: 13, color: '#a7a7a7' }}>Vào làm bài ngay nào!</Text>
                        </Body>
                        <Right />
                    </ListItem>
                    <ListItem avatar style={{ marginLeft: 0 ,paddingLeft: 15}}
                        onPress={() => {
                            this.props.navigation.navigate('ChiTietDe', { 'data': DeThi[0] });
                        }}>
                        <Left>
                            <Thumbnail small square source={require('../public/images/noti1.png')} />
                        </Left>
                        <Body>
                            <Text style={{ fontWeight: 'bold' }}>Đề thi thử THPT QG 2020 môn Toán lần 1 trường chuyên Lê Quý Đôn – Điện Biên</Text>
                            <Text style={{ fontSize: 13, color: '#a7a7a7' }}>Vào làm bài ngay nào!</Text>
                        </Body>
                        <Right />
                    </ListItem>
                    <ListItem avatar style={{ marginLeft: 0 ,paddingLeft: 15}}
                    >
                        <Left>
                            <Thumbnail small square source={require('../public/images/wel.png')} />
                        </Left>
                        <Body>
                            <Text style={{ fontWeight: 'bold' }}>Chào mừng bạn đến với ứng dụng hỗ trợ ôn thi THPT QG</Text>
                            <Text style={{ fontSize: 13, color: '#a7a7a7' }}>Hãy vào tab 'Khám phá' và bắt đầu học ngay nào!</Text>
                        </Body>
                        <Right />
                    </ListItem>
                </List>
            </View>
        );
    }
}
