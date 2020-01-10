import React, { Component } from 'react';
import { View, Text, FlatList, TextInput, TouchableOpacity } from 'react-native';
import { Button, Footer, FooterTab, Container, Content, Thumbnail } from 'native-base';
import Icon from 'react-native-vector-icons/Ionicons';

export default class Replie extends Component {
    constructor(props) {
        super(props);
        this.state = {
            comment: '',
            replies: this.props.navigation.state.params.repComment,
            refresh: false
        };
    }

    render() {
        console.log('content = ', this.props.navigation.state.params);
        return (
            <Container>
                <View style={{
                    flexDirection: 'row', alignItems: 'center',
                    paddingTop: 15,
                    paddingLeft: 15,
                    paddingRight: 15,
                    paddingBottom: 15
                }}>
                    <TouchableOpacity

                        onPress={() => {
                            this.props.navigation.goBack();
                        }}>
                        <Icon name="md-arrow-back" size={25} />
                    </TouchableOpacity>
                    <Text style={{ color: 'black', marginLeft: 15, fontSize: 20 }}>Phản hồi bình luận</Text>

                </View>
                <Content>
                    <View style={{
                        paddingTop: 5,
                        paddingLeft: 15,
                        paddingRight: 15,
                        paddingBottom: 15
                    }}>
                        <View style={{ flexDirection: 'row', marginTop: 10 }}>
                            <Thumbnail small source={{ uri: 'https://data.whicdn.com/images/333604972/original.jpg' }} />
                            <View style={{ marginLeft: 5, flex: 1 }}>
                                <View>
                                    <View style={{
                                        borderColor: '#00817C', borderWidth: 1, borderRadius: 10,
                                        paddingTop: 5,
                                        paddingBottom: 5,
                                        paddingLeft: 10,
                                        paddingRight: 10
                                    }}>
                                        <View>
                                            <Text style={{ fontWeight: 'bold' }}>{this.props.navigation.state.params.authComment.name}</Text>
                                        </View>
                                        <View style={{ marginTop: 5 }}>
                                            <Text>{this.props.navigation.state.params.authComment.content}</Text>
                                        </View>
                                    </View>
                                    <View style={{ flexDirection: 'row', marginLeft: 5, marginTop: 5 }}>
                                        <Text style={{ marginRight: 20, color: '#c4c4c4' }}>10 phút</Text>
                                        <TouchableOpacity
                                            onPress={() => {
                                                this.props.navigation.state.params.authComment.like = !this.props.navigation.state.params.authComment.like;
                                                this.setState({ refresh: !this.state.refresh })
                                            }}>
                                            <Text style={[{ marginRight: 20, color: '#00817C' }, this.props.navigation.state.params.authComment.like ? { fontWeight: 'bold' } : null]}>Thích</Text>
                                        </TouchableOpacity>
                                        <Text style={{ marginRight: 20, color: '#00817C' }}>Trả lời</Text>
                                    </View>
                                </View>

                            </View>
                        </View>
                        <View>
                            <View style={{ marginTop: 10 }}>
                                <View>
                                    <FlatList
                                        scrollEnabled={true}
                                        data={this.state.replies}
                                        renderItem={({ item }) =>
                                            <View style={{ flexDirection: 'row', marginTop: 10, paddingLeft: 40 }}>
                                                <Thumbnail small source={{ uri: 'https://data.whicdn.com/images/333604972/original.jpg' }} />
                                                <View style={{ marginLeft: 5, flex: 1 }}>
                                                    <View>
                                                        <View style={{
                                                            borderColor: '#00817C', borderWidth: 1, borderRadius: 10,
                                                            paddingTop: 5,
                                                            paddingBottom: 5,
                                                            paddingLeft: 10,
                                                            paddingRight: 10
                                                        }}>
                                                            <View>
                                                                <Text style={{ fontWeight: 'bold' }}>{item.name}</Text>
                                                            </View>
                                                            <View style={{ marginTop: 5 }}>
                                                                <Text>{item.content}</Text>
                                                            </View>
                                                        </View>
                                                        <View style={{ flexDirection: 'row', marginLeft: 5, marginTop: 5 }}>
                                                            <Text style={{ marginRight: 20, color: '#c4c4c4' }}>10 phút</Text>
                                                            <TouchableOpacity
                                                                onPress={() => {
                                                                    item.like = !item.like;
                                                                    this.setState({ refresh: !this.state.refresh })
                                                                }}><Text style={[{ marginRight: 20, color: '#00817C' }, item.like ? { fontWeight: 'bold' } : null]}>Thích</Text></TouchableOpacity>

                                                            <Text style={{ marginRight: 20, color: '#00817C' }}>Trả lời</Text>
                                                        </View>
                                                    </View>

                                                </View>
                                            </View>}
                                        extraData={this.state.refresh} />
                                </View>
                            </View>
                        </View>
                    </View>
                </Content>
                <Footer>
                    <FooterTab style={{ alignItems: 'center', padding: 0, backgroundColor: 'white', elevation: 10 }}>
                        <View style={{

                            flex: 1,
                            flexDirection: 'row', alignItems: 'center',
                            //justifyContent: 'space-around',
                            paddingLeft: 20,
                            paddingRight: 20
                        }}>
                            <View style={{ flex: 1, flexDirection: 'row-reverse' }}>
                                <Icon name="md-camera" color={'#00817C'} size={30} />
                            </View>
                            <View style={{ flex: 8, paddingLeft: 20 }}>
                                <TextInput placeholder="Nhập phản hồi..."
                                    value={this.state.comment}
                                    onChangeText={(text) => {
                                        this.setState({
                                            comment: text
                                        })
                                    }} />
                            </View>
                            <TouchableOpacity style={{ flex: 1 }}
                                onPress={() => {
                                    this.setState({
                                        replies: [
                                            ...this.state.replies,
                                            {
                                                id: 'c112',
                                                avatar: 'ds',
                                                name: 'Phat Nguyen',
                                                content: this.state.comment,
                                                time: '1 phút',
                                                like: false,
                                            }
                                        ],
                                        comment: ''
                                    })

                                }}>
                                <Icon name="md-send" color={'#00817C'} size={30} />
                            </TouchableOpacity>
                        </View>
                    </FooterTab>
                </Footer>
            </Container>

        );
    }
}
