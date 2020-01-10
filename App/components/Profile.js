import React, { Component, } from 'react';
import {
    View,
    StatusBar,
    TouchableOpacity, Text
} from 'react-native';
import { Container, Header, Content, Body, Left, Icon, Title, Right, Thumbnail, List, ListItem } from 'native-base';
export default class Profile extends Component {
    constructor(props) {
        super(props);
        this.state = {
        };
    }

    render() {
        return (
            <Container>
                <StatusBar backgroundColor="#00817C" barStyle="light-content" />
                <Content contentContainerStyle={{ flex: 1, backgroundColor: '#f4f4f4' }} >
                    <View style={{
                        backgroundColor: '#00817C', flexDirection: 'row', alignItems: 'center',
                        padding: 30
                    }}>
                        <View style={{ flex: 2 }}>
                            <Thumbnail source={{ uri: "https://data.whicdn.com/images/333604972/original.jpg" }} style={{ marginRight: 10, borderColor: 'white', borderWidth: 1 }} />
                        </View>
                        <View style={{ flexDirection: 'column', flex: 7 }}>
                            <Text style={{ color: 'white' }}>phatnguyen2499@gmail.com</Text>
                            <Text style={{ color: 'white', fontWeight: 'bold', fontSize: 18 }}>Phat Nguyen</Text>
                        </View>
                    </View>


                    <List style={{ flex: 1 }}>
                        <ListItem itemDivider>

                            <Text style={{ color: '#8492A6', fontWeight: 'bold' }}>Quản lý tài khoản</Text>
                        </ListItem>
                        <ListItem onPress={() => { this.showModalUpdatePass() }} style={{ backgroundColor: 'white', marginLeft: 0, paddingLeft: 20 }}>
                            <Left style={{ alignItems: 'center' }}>
                                <Icon name="cogs" type="FontAwesome" style={{ fontSize: 15, marginRight: 15 }} />
                                <Text>Cập nhật tài khoản</Text>
                            </Left>
                            <Right>
                                <Icon name="arrow-forward" />
                            </Right>
                        </ListItem>
                        <ListItem onPress={() => { this.props.navigation.navigate('LichSu') }} style={{ backgroundColor: 'white', marginLeft: 0, paddingLeft: 20 }}>
                            <Left style={{ alignItems: 'center' }}>
                                <Icon name="history" type="FontAwesome" style={{ fontSize: 15, marginRight: 15 }} />
                                <Text>Lịch sử</Text>
                            </Left>
                            <Right>
                                <Icon name="arrow-forward" />
                            </Right>
                        </ListItem>
                        <ListItem itemDivider>
                            <Text style={{ color: '#8492A6', fontWeight: 'bold' }}>Khác</Text>
                        </ListItem>
                        <ListItem style={{ backgroundColor: 'white', marginLeft: 0, paddingLeft: 20 }}>
                            <Left style={{ alignItems: 'center' }}>
                                <Icon name="phone" type="FontAwesome" style={{ fontSize: 15, marginRight: 15 }} />
                                <Text>Liên hệ hỗ trợ</Text>
                            </Left>
                            <Right>
                                <Icon name="arrow-forward" />
                            </Right>
                        </ListItem>
                        <ListItem style={{ backgroundColor: 'white', marginLeft: 0, paddingLeft: 20 }}
                            onPress={() => {
                                this.props.navigation.navigate("DangStack");

                            }}>
                            <Left style={{ alignItems: 'center' }}>
                                <Icon name="sign-out" type="FontAwesome" style={{ fontSize: 15, marginRight: 15 }} />
                                <Text>Đăng xuất</Text>
                            </Left>
                            <Right>
                                <Icon name="arrow-forward" />
                            </Right>
                        </ListItem>
                        <ListItem itemDivider>

                        </ListItem>
                    </List>
                </Content>
            </Container>
        );
    }
}
