import React, { Component } from 'react';
import { View, Text, FlatList, TouchableOpacity, TextInput, ScrollView } from 'react-native';
import { Button, Footer, FooterTab, Container, Content, Thumbnail } from 'native-base';
import Icon from 'react-native-vector-icons/Ionicons';
export default class Post extends Component {
    constructor(props) {
        super(props);
        this.state = {
            comments: this.props.navigation.state.params.post.comment,
            comment: ''
        };
    }

    render() {
        console.log('commet = ', this.props.navigation.state.params.post.comment);
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
                    <Text style={{ color: 'black', marginLeft: 15, fontSize: 20 }}>Bài viết của {this.props.navigation.state.params.post.name}</Text>

                </View>
                <Content>
                    <View style={{
                        paddingTop: 5,
                        paddingLeft: 15,
                        paddingRight: 15,
                        paddingBottom: 15
                    }}>
                        <View>
                            <View style={{ flexDirection: 'row', justifyContent: 'space-between' }}>
                                <View style={{ flexDirection: 'row' }}>
                                    <View style={{ paddingRight: 10 }}>
                                        <Thumbnail small source={{ uri: 'https://data.whicdn.com/images/333604972/original.jpg' }} />
                                    </View>
                                    <View>
                                        <Text>{this.props.navigation.state.params.post.name}</Text>
                                        <Text style={{ color: "#c4c4c4" }}>{this.props.navigation.state.params.post.time}</Text>
                                    </View>
                                </View>
                                <View>
                                    <Icon name="ios-more" size={20} />
                                </View>
                            </View>
                            <View style={{ paddingBottom: 10, paddingTop: 10 }} >
                                <Text>{this.props.navigation.state.params.post.content}</Text>
                            </View>
                            <View style={{ flexDirection: 'row', justifyContent: 'space-between' }}>
                                <View style={{ flexDirection: 'row', alignItems: 'center' }}><Icon name="md-heart" size={20} color={'#00817C'} /><Text style={{ marginLeft: 5 }}>{this.props.navigation.state.params.post.love}</Text></View>
                                <View style={{ flexDirection: 'row', alignItems: 'center' }}><Icon name="md-chatboxes" size={20} color={'#00817C'} /><Text style={{ marginLeft: 5 }}>{this.props.navigation.state.params.post.cmt}</Text></View>
                                <View style={{ flexDirection: 'row', alignItems: 'center' }}><Icon name="md-share-alt" size={20} color={'#00817C'} /><Text style={{ marginLeft: 5 }}>{this.props.navigation.state.params.post.share}</Text></View>
                            </View>
                        </View>

                        <View>
                            <View style={{ marginTop: 10 }}>
                                <Text>Bình luận</Text>
                            </View>
                            <FlatList
                                style={{
                                    marginBottom: 10
                                }}
                                //scrollEnabled={true}
                                data={this.state.comments}
                                renderItem={({ item, index }) =>
                                    <View style={{ flexDirection: 'row', marginTop: 10 }}>
                                        <Thumbnail small source={{ uri: 'https://data.whicdn.com/images/333604972/original.jpg' }} />
                                        <View style={{ flex: 1, marginLeft: 5 }}>
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
                                                <Text style={{ marginRight: 20, color: '#c4c4c4' }}>{item.time}</Text>
                                                <TouchableOpacity
                                                    onPress={() => {
                                                        let temp = this.state.comments;
                                                        temp[index].like = !temp[index].like;
                                                        this.setState({
                                                            comments: temp
                                                        })

                                                    }}>
                                                    <Text style={[{ marginRight: 20, color: '#00817C' }, item.like ? { fontWeight: 'bold' } : null]}>Thích</Text>
                                                </TouchableOpacity>
                                                <TouchableOpacity
                                                    onPress={() => {
                                                        this.props.navigation.navigate('Replie', { authComment: item, repComment: item.replies });
                                                    }}><Text style={{ marginRight: 20, color: '#00817C' }}>Trả lời</Text>
                                                </TouchableOpacity>
                                            </View>
                                            {item.replies &&
                                                <View style={{ marginTop: 5, marginLeft: 5 }}>
                                                    <TouchableOpacity
                                                        onPress={() => {
                                                            this.props.navigation.navigate('Replie', { authComment: item, repComment: item.replies });
                                                        }}>
                                                        <Text>Xem các phản hồi</Text>
                                                    </TouchableOpacity>
                                                </View>}
                                        </View>
                                    </View>
                                }
                                keyExtractor={item => item.id}
                            />
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
                                <TextInput placeholder="Nhập bình luận..."
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
                                        comments: [
                                            ...this.state.comments,
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

