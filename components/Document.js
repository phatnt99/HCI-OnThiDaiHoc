import React, { Component } from 'react';
import { View, Text, TouchableOpacity } from 'react-native';
import styles from './styles';
import Icon from 'react-native-vector-icons/Ionicons';
import Pdf from 'react-native-pdf';

export default class Document extends Component {
  constructor(props) {
    super(props);
    this.state = {
    };
  }

  render() {
    return (
      <View style={{ flex: 1 }}>
        <View style={styles.header}>
          <View style={{ flexDirection: 'row' }}>
            <View style={{ flex: 8 }}
            >
              <TouchableOpacity
                onPress={() => {
                  this.props.navigation.goBack();
                }}>
                <Icon name="md-arrow-back" size={25} />
              </TouchableOpacity>
              <Text style={{
                marginTop: 10,
                fontWeight: 'bold',
                fontSize: 19
              }}>{this.props.navigation.state.params.title}</Text>
            </View>
            <View style={{ flex: 2, flexDirection: 'row-reverse' }}>
              <Icon name="md-cloud-download" size={30} color="#00817C" />
            </View>
          </View>
          <View style={styles.viewAnalys}>
            <Text style={{ fontWeight: 'bold', marginLeft: 5 }}>1200 lượt xem</Text>
            <Icon name="md-eye" size={20} color="#00817C" />
          </View>
        </View>
        <View style={{ flex: 1 }}>
          <Pdf
            source={{ uri: 'http://c3mangthit.vinhlong.edu.vn/upload/21051/20181031/NHuNG_GIaI_PHaP_oN_THI_THPT_QG_MoN_LiCH_Su_Va_GDCD.pdf', cache: true }}
            onLoadComplete={(numberOfPages, filePath) => {
              console.log(`number of pages: ${numberOfPages}`);
            }}
            onPageChanged={(page, numberOfPages) => {
              console.log(`current page: ${page}`);
            }}
            onError={(error) => {
              console.log(error);
            }}
            onPressLink={(uri) => {
              console.log(`Link presse: ${uri}`)
            }}
            style={{
              flex: 1
            }} />
        </View>
      </View>
    );
  }
}
