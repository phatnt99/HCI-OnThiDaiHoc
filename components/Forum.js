import React, { Component } from 'react';
import { View, Text, Dimensions, TextInput, Image, FlatList, TouchableOpacity, ToastAndroid, Alert } from 'react-native';
import { Thumbnail, Container, Header, Content, Item, Input } from 'native-base';
import Icon from 'react-native-vector-icons/Ionicons';
import { withNavigation } from 'react-navigation';

const DATA = [
    {
        id: '1',
        avatar: 'ds',
        name: 'Thuy Duong',
        time: '10 phút',
        content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        love: 12,
        cmt: 12,
        share: 3,
        comment: [
            {
                id: 'c1',
                avatar: 'ds',
                name: 'Nguyen A',
                content: 'Câu hỏi thật hóc búa!1',
                time: '5 phút',
                like: false,
                replies: [
                    {
                        id: 'c1',
                        avatar: 'ds',
                        name: 'Nguyen A',
                        content: 'Trả lời cho bình luận trên',
                        time: '5 phút',
                        like: false,
                    }
                ]
            },
            {
                id: 'c2',
                avatar: 'ds',
                name: 'Nguyen A',
                content: 'Câu hỏi thật hóc búa!2',
                time: '5 phút',
                like: false,
            },

            {
                id: 'c3',
                avatar: 'ds',
                name: 'Nguyen A',
                content: 'Câu hỏi thật hóc búa!3',
                time: '5 phút',
                like: false,
            },
            {
                id: 'c4',
                avatar: 'ds',
                name: 'Nguyen A',
                content: 'Câu hỏi thật hóc búa!4',
                time: '5 phút',
                like: false,
            },
            {
                id: 'c5',
                avatar: 'ds',
                name: 'Nguyen A',
                content: 'Câu hỏi thật hóc búa!5',
                time: '5 phút',
                like: false,
            },
            {
                id: 'c6',
                avatar: 'ds',
                name: 'Nguyen A',
                content: 'Câu hỏi thật hóc búa!6',
                time: '5 phút'
                , like: false,
            },
        ]
    },
    {
        id: '2',
        avatar: 'ds',
        name: 'Thuy Duong',
        time: '10 phút',
        content: 'Nội dung',
        love: 12,
        cmt: 12,
        share: 3,
        comment: {

        }
    },
    {
        id: '3',
        avatar: 'ds',
        name: 'Phát Nguyễn',
        time: '24 phút',
        content: 'Nội dung',
        love: 12,
        cmt: 12,
        share: 3,
        comment: {

        }
    },
    {
        id: '4',
        avatar: 'ds',
        name: 'Phát Nguyễn',
        time: '24 phút',
        content: 'Nội dung',
        love: 12,
        cmt: 12,
        share: 3,
        comment: {

        }
    }
];

class Forum extends Component {
    constructor(props) {
        super(props);
        this.state = {
            dataset: DATA.map((x) => x),
            mon: 'Tất cả',
            khoi: 'Tất cả',
            moMon: false,
            moKhoi: false,
            isUp: false
        };
        this.offset = 0;
    }

    render() {
        return (
            <View style={{ flex: 1, flexDirection: 'column', marginBottom: 10 }}>
                <View style={{
                    backgroundColor: "#FFFFFF",
                    paddingLeft: 20, paddingRight: 20
                }}>
                    <TouchableOpacity style={[{
                        //width: Dimensions.get('window').width - 30,
                        alignSelf: 'center',
                        flexDirection: 'row',
                        alignItems: 'center',
                        marginTop: 10,
                        marginBottom: 10,
                        paddingLeft: 5,
                        paddingRight: 5,
                        backgroundColor: '#ffffff',
                        elevation: 4
                    }]}
                        onPress={() => {
                            this.props.navigation.navigate("DangBai");
                        }}>
                        <View>
                            <Thumbnail
                                style={{
                                    width: 30,
                                    height: 30
                                }}
                                source={{ uri: 'https://data.whicdn.com/images/333604972/original.jpg' }} />
                        </View>
                        <TextInput placeholder="Bạn cần hỏi gì?"
                            editable={false}
                            style={{
                                height: 40, flex: 1,
                                marginLeft: 15
                            }} />
                        <Icon name="md-camera" size={25} color={'#00817C'} />
                    </TouchableOpacity>

                </View>

                <FlatList
                    data={this.state.dataset}
                    renderItem={({ item, index }) =>
                        <View style={{
                            margin: 10, padding: 10, backgroundColor: 'white', elevation: 3,
                            borderRadius: 5,
                        }}
                        >
                            <View style={{ flexDirection: 'row', justifyContent: 'space-between' }}>
                                <View style={{ flexDirection: 'row' }}>
                                    <View style={{ paddingRight: 10 }}>
                                        <Thumbnail
                                            small
                                            source={{ uri: 'https://data.whicdn.com/images/333604972/original.jpg' }} />
                                    </View>
                                    <View>
                                        <Text style={{ fontWeight: 'bold' }}>{item.name}</Text>
                                        <Text style={{ color: "#c4c4c4" }}>{item.time}</Text>
                                    </View>
                                </View>
                                <TouchableOpacity
                                    onPress={() => {
                                        Alert.alert("Thông báo", "Bạn muốn báo cáo vi phạm câu hỏi này?", [
                                            {
                                                text: 'Hủy', onPress: () => {
                                                    
                                                },
                                                style: 'cancel',
                                            },
                                            {
                                                text: 'Báo cáo', onPress: () => {
                                                    ToastAndroid.show('Đã báo cáo vi phạm!', ToastAndroid.SHORT);   
                                                },
                                            },
                                        ],
                                            { cancelable: false });

                                    }}>
                                    <Icon name="md-information-circle" size={20} color={"#00817C"} />
                                </TouchableOpacity>
                            </View>
                            <View style={{ paddingBottom: 5, paddingTop: 10, marginBottom: 5 }} >
                                <Text numberOfLines={2} lineBreakMode={"tail"}>{item.content}</Text>
                            </View>
                            <View style={{ flexDirection: 'row', justifyContent: 'space-between', alignItems: 'flex-end', paddingTop: 5, borderTopColor: '#f4f4f4', borderTopWidth: 1 }}>
                                <TouchableOpacity
                                    onPress={() => {
                                        let temp = this.state.dataset;
                                        temp[index].love == 12 ? temp[index].love = temp[index].love + 1 : temp[index].love--;
                                        this.setState({
                                            dataset: temp
                                        })

                                    }}
                                    style={{ flexDirection: 'row', alignItems: 'center', paddingRight: 20 }}><Icon name={this.state.dataset[index].love != 12 ? "md-heart" : "md-heart-empty"} size={25} color={"#00817C"} /><Text style={{ marginLeft: 5 }}>{item.love}</Text></TouchableOpacity>
                                <TouchableOpacity
                                    onPress={() => {
                                        this.props.navigation.navigate('Post', { post: item });

                                    }}
                                    style={{ flexDirection: 'row', alignItems: 'center', paddingRight: 20, paddingLeft: 20 }}><Icon name="md-chatboxes" size={25} color={'#00817C'} /><Text style={{ marginLeft: 5 }}>{item.cmt}</Text></TouchableOpacity>
                                <TouchableOpacity style={{ flexDirection: 'row', alignItems: 'center', paddingLeft: 20 }}><Icon name="md-share-alt" size={25} color={'#00817C'} /><Text style={{ marginLeft: 5 }}>{item.share}</Text></TouchableOpacity>
                            </View>
                        </View>}
                    keyExtractor={item => item.id}
                    ListHeaderComponent={() =>
                        <View>
                            <View style={{ margin: 10, flexDirection: 'row' }}>
                                <TouchableOpacity style={{ flex: 5, alignItems: 'center', justifyContent: 'center', flexDirection: 'row', alignItems: 'center' }}
                                    onPress={() => { this.setState({ moKhoi: !this.state.moKhoi, moMon: false }) }}>
                                    <Text style={{ marginRight: 10 }}>Khối <Text style={{ fontWeight: 'bold' }}>{this.state.khoi}</Text></Text>
                                    <Icon name="ios-arrow-down" />
                                </TouchableOpacity>
                                <TouchableOpacity style={{ flex: 5, alignItems: 'center', justifyContent: 'center', flexDirection: 'row', alignItems: 'center' }}
                                    onPress={() => { this.setState({ moMon: !this.state.moMon, moKhoi: false }) }}>
                                    <Text style={{ marginRight: 10 }}>Môn <Text style={{ fontWeight: 'bold' }}>{this.state.mon}</Text></Text>
                                    <Icon name="ios-arrow-down" />
                                </TouchableOpacity>
                            </View>
                            {this.state.moMon == true &&
                                <View style={{
                                    marginLeft: 10,
                                    marginRight: 10,
                                    paddingTop: 10,
                                    paddingBottom: 10,
                                    backgroundColor: 'white',
                                    elevation: 4
                                }}>
                                    <View style={{ alignItems: 'center', justifyContent: 'center', }}>
                                        <TouchableOpacity
                                            style={{
                                                width: 80,
                                                height: 30,
                                                alignItems: 'center',
                                                justifyContent: 'center',
                                            }}
                                            onPress={() => {
                                                this.setState({ mon: 'Tất cả', moMon: !this.state.moMon })
                                            }}>
                                            <Text>Tất cả</Text>
                                        </TouchableOpacity>
                                    </View>
                                    <View style={{ flexDirection: 'row', justifyContent: 'center', }}>
                                        <TouchableOpacity
                                            style={{
                                                width: 80,
                                                height: 30,
                                                alignItems: 'center',
                                                justifyContent: 'center',
                                            }}
                                            onPress={() => {
                                                this.setState({ mon: 'Tóan', moMon: !this.state.moMon })
                                            }}>
                                            <Text>Toán</Text>
                                        </TouchableOpacity>
                                        <TouchableOpacity
                                            style={{
                                                width: 80,
                                                height: 30,
                                                alignItems: 'center',
                                                justifyContent: 'center',
                                            }}
                                            onPress={() => {
                                                this.setState({ mon: 'Lý', moMon: !this.state.moMon })
                                            }}>
                                            <Text>Lý</Text>
                                        </TouchableOpacity>
                                        <TouchableOpacity
                                            style={{
                                                width: 80,
                                                height: 30,
                                                alignItems: 'center',
                                                justifyContent: 'center',
                                            }}
                                            onPress={() => {
                                                this.setState({ mon: 'Hóa', moMon: !this.state.moMon })
                                            }}>
                                            <Text>Hóa</Text>
                                        </TouchableOpacity>
                                    </View>
                                    <View style={{ flexDirection: 'row', justifyContent: 'center', }}>
                                        <TouchableOpacity
                                            style={{
                                                width: 80,
                                                height: 30,
                                                alignItems: 'center',
                                                justifyContent: 'center',
                                            }}
                                            onPress={() => {
                                                this.setState({ mon: 'Sinh', moMon: !this.state.moMon })
                                            }}>
                                            <Text>Sinh</Text>
                                        </TouchableOpacity>
                                        <TouchableOpacity
                                            style={{
                                                width: 80,
                                                height: 30,
                                                alignItems: 'center',
                                                justifyContent: 'center',
                                            }}
                                            onPress={() => {
                                                this.setState({ mon: 'Sử', moMon: !this.state.moMon })
                                            }}>
                                            <Text>Sử</Text>
                                        </TouchableOpacity>
                                        <TouchableOpacity
                                            style={{
                                                width: 80,
                                                height: 30,
                                                alignItems: 'center',
                                                justifyContent: 'center',
                                            }}
                                            onPress={() => {
                                                this.setState({ mon: 'Địa', moMon: !this.state.moMon })
                                            }}>
                                            <Text>Địa</Text>
                                        </TouchableOpacity>
                                    </View>
                                    <View style={{ flexDirection: 'row', justifyContent: 'center', }}>
                                        <TouchableOpacity
                                            style={{
                                                width: 80,
                                                height: 30,
                                                alignItems: 'center',
                                                justifyContent: 'center',
                                            }}
                                            onPress={() => {
                                                this.setState({ mon: 'Anh', moMon: !this.state.moMon })
                                            }}>
                                            <Text>Anh</Text>
                                        </TouchableOpacity>
                                        <TouchableOpacity
                                            style={{
                                                width: 80,
                                                height: 30,
                                                alignItems: 'center',
                                                justifyContent: 'center',
                                            }}
                                            onPress={() => {
                                                this.setState({ mon: 'Văn', moMon: !this.state.moMon })
                                            }}>
                                            <Text>Văn</Text>
                                        </TouchableOpacity>
                                        <TouchableOpacity
                                            style={{
                                                width: 80,
                                                height: 30,
                                                alignItems: 'center',
                                                justifyContent: 'center',
                                            }}
                                            onPress={() => {
                                                this.setState({ mon: 'GDCD', moMon: !this.state.moMon })
                                            }}>
                                            <Text>GDCD</Text>
                                        </TouchableOpacity>
                                    </View>
                                </View>}
                            {this.state.moKhoi == true &&
                                <View style={{
                                    marginLeft: 10,
                                    marginRight: 10,
                                    paddingTop: 10,
                                    paddingBottom: 10,
                                    backgroundColor: 'white',
                                    elevation: 4
                                }}>
                                    <View style={{ alignItems: 'center', justifyContent: 'center', }}>
                                        <TouchableOpacity
                                            style={{
                                                width: 80,
                                                height: 30,
                                                alignItems: 'center',
                                                justifyContent: 'center',
                                            }}
                                            onPress={() => {
                                                this.setState({ khoi: 'Tất cả', moKhoi: !this.state.moKhoi })
                                            }}>
                                            <Text>Tất cả</Text>
                                        </TouchableOpacity>
                                    </View>
                                    <View style={{ flexDirection: 'row', justifyContent: 'center', }}>
                                        <TouchableOpacity
                                            style={{
                                                width: 80,
                                                height: 30,
                                                alignItems: 'center',
                                                justifyContent: 'center',
                                            }}
                                            onPress={() => {
                                                this.setState({ khoi: '10', moKhoi: !this.state.moKhoi })
                                            }}>
                                            <Text>10</Text>
                                        </TouchableOpacity>
                                        <TouchableOpacity
                                            style={{
                                                width: 80,
                                                height: 30,
                                                alignItems: 'center',
                                                justifyContent: 'center',
                                            }}
                                            onPress={() => {
                                                this.setState({ khoi: '11', moKhoi: !this.state.moKhoi })
                                            }}>
                                            <Text>11</Text>
                                        </TouchableOpacity>
                                        <TouchableOpacity
                                            style={{
                                                width: 80,
                                                height: 30,
                                                alignItems: 'center',
                                                justifyContent: 'center',
                                            }}
                                            onPress={() => {
                                                this.setState({ khoi: '12', moKhoi: !this.state.moKhoi })
                                            }}>
                                            <Text>12</Text>
                                        </TouchableOpacity>
                                    </View>
                                </View>}
                        </View>
                    }
                />
            </View>


        );
    }
}

export default withNavigation(Forum);